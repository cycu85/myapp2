<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ErrorController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger
    ) {
    }

    #[Route('/error/access-denied', name: 'error_access_denied')]
    public function accessDenied(Request $request): Response
    {
        $this->logger->info('Access denied page accessed', [
            'user' => $this->getUser()?->getUsername() ?? 'anonymous',
            'ip' => $request->getClientIp(),
            'referrer' => $request->headers->get('referer'),
            'user_agent' => $request->headers->get('User-Agent')
        ]);

        return $this->render('error/access_denied.html.twig');
    }
}