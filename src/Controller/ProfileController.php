<?php

namespace App\Controller;

use App\Form\AvatarUploadType;
use App\Form\ChangePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'profile')]
    public function index(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $user = $this->getUser();
        $changePasswordForm = null;
        $avatarUploadForm = null;
        
        // Tylko dla użytkowników lokalnych (bez LDAP) pokazuj formularz zmiany hasła
        if (!$user->getLdapDn()) {
            $changePasswordForm = $this->createForm(ChangePasswordType::class);
            $changePasswordForm->handleRequest($request);

            if ($changePasswordForm->isSubmitted()) {
                if ($changePasswordForm->isValid()) {
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
                } else {
                    // Formularz ma błędy walidacji
                    $this->addFlash('error', 'Formularz zawiera błędy. Sprawdź wprowadzone dane.');
                }
            }
        }

        // Formularz uploadu avatara dla wszystkich użytkowników
        $avatarUploadForm = $this->createForm(AvatarUploadType::class);
        $avatarUploadForm->handleRequest($request);

        if ($avatarUploadForm->isSubmitted() && $avatarUploadForm->isValid()) {
            /** @var UploadedFile $avatarFile */
            $avatarFile = $avatarUploadForm->get('avatar')->getData();

            if ($avatarFile) {
                $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$avatarFile->guessExtension();

                try {
                    $avatarFile->move(
                        $this->getParameter('kernel.project_dir').'/public/uploads/avatars',
                        $newFilename
                    );

                    // Usuń stary avatar jeśli istnieje
                    if ($user->getAvatar()) {
                        $oldAvatarPath = $this->getParameter('kernel.project_dir').'/public/uploads/avatars/'.$user->getAvatar();
                        if (file_exists($oldAvatarPath)) {
                            unlink($oldAvatarPath);
                        }
                    }

                    $user->setAvatar($newFilename);
                    $entityManager->persist($user);
                    $entityManager->flush();

                    $this->addFlash('success', 'Zdjęcie profilowe zostało pomyślnie zmienione.');
                    return $this->redirectToRoute('profile');

                } catch (FileException $e) {
                    $this->addFlash('error', 'Wystąpił błąd podczas przesyłania zdjęcia.');
                }
            }
        }

        return $this->render('profile/index.html.twig', [
            'user' => $user,
            'changePasswordForm' => $changePasswordForm?->createView(),
            'avatarUploadForm' => $avatarUploadForm->createView(),
            'isLdapUser' => !empty($user->getLdapDn())
        ]);
    }
}