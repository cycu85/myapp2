<?php

namespace App\Controller\Admin;

use App\Service\PermissionService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/logs')]
class LogController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private LoggerInterface $logger
    ) {
    }

    #[Route('/', name: 'admin_logs')]
    public function index(Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            $this->logger->warning('Unauthorized admin logs access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp()
            ]);
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

        $this->logger->info('Admin logs index accessed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'log_files_count' => count($logFiles)
        ]);

        return $this->render('admin/logs/index.html.twig', [
            'logFiles' => $logFiles,
        ]);
    }

    #[Route('/view/{filename}', name: 'admin_logs_view')]
    public function view(string $filename, Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            $this->logger->warning('Unauthorized admin log view access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'filename' => $filename
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $logDirectory = $this->getParameter('kernel.project_dir') . '/var/log';
        $filePath = $logDirectory . '/' . $filename;

        // Security check - ensure file is in log directory and exists
        if (!is_file($filePath) || !str_starts_with(realpath($filePath), realpath($logDirectory))) {
            $this->logger->warning('Admin log view access denied - invalid file', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'filename' => $filename,
                'file_path' => $filePath
            ]);
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

        $this->logger->info('Admin log file viewed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'filename' => $filename,
            'file_size' => filesize($filePath),
            'lines_displayed' => count($lines)
        ]);

        return $this->render('admin/logs/view.html.twig', [
            'filename' => $filename,
            'lines' => $lines,
            'fileSize' => filesize($filePath),
            'lastModified' => filemtime($filePath),
        ]);
    }

    #[Route('/download/{filename}', name: 'admin_logs_download')]
    public function download(string $filename, Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            $this->logger->warning('Unauthorized admin log download access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'filename' => $filename
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $logDirectory = $this->getParameter('kernel.project_dir') . '/var/log';
        $filePath = $logDirectory . '/' . $filename;

        // Security check
        if (!is_file($filePath) || !str_starts_with(realpath($filePath), realpath($logDirectory))) {
            $this->logger->warning('Admin log download access denied - invalid file', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'filename' => $filename,
                'file_path' => $filePath
            ]);
            throw $this->createNotFoundException('Plik logu nie został znaleziony');
        }

        $this->logger->info('Admin log file downloaded', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'filename' => $filename,
            'file_size' => filesize($filePath)
        ]);

        return $this->file($filePath, $filename);
    }

    #[Route('/clear/{filename}', name: 'admin_logs_clear', methods: ['POST'])]
    public function clear(string $filename, Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            $this->logger->warning('Unauthorized admin log clear access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'filename' => $filename
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $logDirectory = $this->getParameter('kernel.project_dir') . '/var/log';
        $filePath = $logDirectory . '/' . $filename;

        // Security check
        if (!is_file($filePath) || !str_starts_with(realpath($filePath), realpath($logDirectory))) {
            $this->logger->warning('Admin log clear access denied - invalid file', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'filename' => $filename,
                'file_path' => $filePath
            ]);
            throw $this->createNotFoundException('Plik logu nie został znaleziony');
        }

        $originalSize = filesize($filePath);
        
        // Clear the file content
        file_put_contents($filePath, '');

        $this->logger->warning('Admin log file cleared', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'filename' => $filename,
            'original_size' => $originalSize
        ]);

        $this->addFlash('success', "Plik logu {$filename} został wyczyszczony.");
        
        return $this->redirectToRoute('admin_logs');
    }
}