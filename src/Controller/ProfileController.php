<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'profile')]
    public function index(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $changePasswordForm = null;
        
        // Tylko dla użytkowników lokalnych (bez LDAP) pokazuj formularz zmiany hasła
        if (!$user->getLdapDn()) {
            $changePasswordForm = $this->createForm(ChangePasswordType::class);
            $changePasswordForm->handleRequest($request);

            if ($changePasswordForm->isSubmitted() && $changePasswordForm->isValid()) {
                $data = $changePasswordForm->getData();
                
                // Sprawdź obecne hasło
                if (!$passwordHasher->isPasswordValid($user, $data['currentPassword'])) {
                    $this->addFlash('error', 'Obecne hasło jest nieprawidłowe.');
                } else {
                    // Ustaw nowe hasło
                    $encodedPassword = $passwordHasher->hashPassword($user, $data['newPassword']);
                    $user->setPassword($encodedPassword);
                    
                    $entityManager->persist($user);
                    $entityManager->flush();
                    
                    $this->addFlash('success', 'Hasło zostało pomyślnie zmienione.');
                    
                    return $this->redirectToRoute('profile');
                }
            }
        }

        return $this->render('profile/index.html.twig', [
            'user' => $user,
            'changePasswordForm' => $changePasswordForm?->createView(),
            'isLdapUser' => !empty($user->getLdapDn())
        ]);
    }
}