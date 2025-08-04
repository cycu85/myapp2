<?php

namespace App\Security;

use App\Entity\User;
use App\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\Ldap\Entry;
use Symfony\Component\Ldap\LdapInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class LdapUserProvider implements UserProviderInterface
{
    public function __construct(
        private UserRepository $userRepository,
        private LdapInterface $ldap,
        private string $baseDn,
        private string $searchDn,
        private string $searchPassword,
        private string $uidKey = 'sAMAccountName',
        private ?LoggerInterface $logger = null
    ) {}

    public function loadUserByIdentifier(string $identifier): UserInterface
    {
        $this->logger?->info('LdapUserProvider: Attempting to load user', ['identifier' => $identifier]);
        
        // Najpierw spróbuj znaleźć użytkownika w bazie danych
        $user = $this->userRepository->findOneBy(['username' => $identifier]);
        
        if ($user && $user->getLdapDn()) {
            $this->logger?->info('LdapUserProvider: Found LDAP user in database', ['username' => $identifier, 'ldapDn' => $user->getLdapDn()]);
            // Użytkownik istnieje i ma DN LDAP - sprawdź czy jest aktywny w LDAP
            try {
                $this->ldap->bind($this->searchDn, $this->searchPassword);
                $query = $this->ldap->query($this->baseDn, "({$this->uidKey}={$identifier})");
                $result = $query->execute();
                
                if ($result->count() > 0) {
                    $this->logger?->info('LdapUserProvider: LDAP user verified and active', ['username' => $identifier]);
                    return $user;
                } else {
                    $this->logger?->warning('LdapUserProvider: LDAP user not found in directory', ['username' => $identifier]);
                }
            } catch (\Exception $e) {
                $this->logger?->error('LdapUserProvider: LDAP error, falling back to local auth', ['username' => $identifier, 'error' => $e->getMessage()]);
                // Błąd LDAP - pozwól na logowanie przez bazę danych
                if ($user->getPassword()) {
                    return $user;
                }
            }
        } elseif ($user && !$user->getLdapDn()) {
            $this->logger?->info('LdapUserProvider: Found local user in database', ['username' => $identifier]);
            // Użytkownik lokalny (bez LDAP)
            return $user;
        } else {
            $this->logger?->warning('LdapUserProvider: User not found in database', ['username' => $identifier]);
        }

        throw new UserNotFoundException(sprintf('User "%s" not found.', $identifier));
    }

    public function refreshUser(UserInterface $user): UserInterface
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Invalid user class "%s".', get_class($user)));
        }

        return $this->loadUserByIdentifier($user->getUserIdentifier());
    }

    public function supportsClass(string $class): bool
    {
        return User::class === $class;
    }

    public function loadUserByUsername(string $username): UserInterface
    {
        return $this->loadUserByIdentifier($username);
    }
}