<?php

namespace App\Controller\Admin;

use App\Service\PermissionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/logs')]
class LogController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService
    ) {
    }

    #[Route('/', name: 'admin_logs')]
    public function index(): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        // Get log files from var/log directory
        $logDirectory = $this->getParameter('kernel.project_dir') . '/var/log';
        $logFiles = [];
        
        if (is_dir($logDirectory)) {
            $files = scandir($logDirectory);
            foreach ($files as $file) {
                if (is_file($logDirectory . '/' . $file) && pathinfo($file, PATHINFO_EXTENSION) === 'log') {
                    $logFiles[] = [
                        'name' => $file,
                        'path' => $logDirectory . '/' . $file,
                        'size' => filesize($logDirectory . '/' . $file),
                        'modified' => filemtime($logDirectory . '/' . $file),
                    ];
                }
            }
        }

        // Sort by modification time (newest first)
        usort($logFiles, function($a, $b) {
            return $b['modified'] - $a['modified'];
        });

        return $this->render('admin/logs/index.html.twig', [
            'logFiles' => $logFiles,
        ]);
    }

    #[Route('/view/{filename}', name: 'admin_logs_view')]
    public function view(string $filename): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $logDirectory = $this->getParameter('kernel.project_dir') . '/var/log';
        $filePath = $logDirectory . '/' . $filename;

        // Security check - ensure file is in log directory and exists
        if (!is_file($filePath) || !str_starts_with(realpath($filePath), realpath($logDirectory))) {
            throw $this->createNotFoundException('Plik logu nie został znaleziony');
        }

        // Read last 1000 lines of the log file
        $lines = [];
        $handle = fopen($filePath, 'r');
        if ($handle) {
            // Go to end of file
            fseek($handle, -1, SEEK_END);
            
            // Read backwards to get last lines
            $lineCount = 0;
            $position = ftell($handle);
            $line = '';
            
            while ($position >= 0 && $lineCount < 1000) {
                fseek($handle, $position);
                $char = fgetc($handle);
                
                if ($char === "\n" || $position === 0) {
                    if ($line !== '') {
                        array_unshift($lines, $line);
                        $lineCount++;
                    }
                    $line = '';
                } else {
                    $line = $char . $line;
                }
                $position--;
            }
            fclose($handle);
        }

        return $this->render('admin/logs/view.html.twig', [
            'filename' => $filename,
            'lines' => $lines,
            'fileSize' => filesize($filePath),
            'lastModified' => filemtime($filePath),
        ]);
    }

    #[Route('/download/{filename}', name: 'admin_logs_download')]
    public function download(string $filename): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $logDirectory = $this->getParameter('kernel.project_dir') . '/var/log';
        $filePath = $logDirectory . '/' . $filename;

        // Security check
        if (!is_file($filePath) || !str_starts_with(realpath($filePath), realpath($logDirectory))) {
            throw $this->createNotFoundException('Plik logu nie został znaleziony');
        }

        return $this->file($filePath, $filename);
    }

    #[Route('/clear/{filename}', name: 'admin_logs_clear', methods: ['POST'])]
    public function clear(string $filename): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $logDirectory = $this->getParameter('kernel.project_dir') . '/var/log';
        $filePath = $logDirectory . '/' . $filename;

        // Security check
        if (!is_file($filePath) || !str_starts_with(realpath($filePath), realpath($logDirectory))) {
            throw $this->createNotFoundException('Plik logu nie został znaleziony');
        }

        // Clear the file content
        file_put_contents($filePath, '');

        $this->addFlash('success', "Plik logu {$filename} został wyczyszczony.");
        
        return $this->redirectToRoute('admin_logs');
    }
}