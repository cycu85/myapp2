<?php

namespace App\Controller;

use App\Service\SettingService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DynamicCssController extends AbstractController
{
    public function __construct(
        private SettingService $settingService
    ) {
    }

    #[Route('/dynamic-theme.css', name: 'dynamic_css')]
    public function generateCss(): Response
    {
        $primaryColor = $this->settingService->get('primary_color', '#405189');
        
        // Konwertuj hex na RGB
        $rgb = $this->hexToRgb($primaryColor);
        $rgbString = implode(', ', $rgb);
        
        // Oblicz ciemniejszy odcień dla hover
        $darkerColor = $this->darkenColor($primaryColor, 20);
        
        $css = "/* Dynamic theme colors - Generated automatically */
:root {
    --bs-primary: {$primaryColor};
    --bs-primary-rgb: {$rgbString};
    --bs-primary-bg-subtle: rgba({$rgbString}, 0.1);
    --bs-primary-border-subtle: rgba({$rgbString}, 0.2);
    --bs-primary-text-emphasis: {$darkerColor};
}

/* Apply primary color to various elements */
.btn-primary {
    background-color: var(--bs-primary) !important;
    border-color: var(--bs-primary) !important;
}

.btn-primary:hover {
    background-color: var(--bs-primary-text-emphasis) !important;
    border-color: var(--bs-primary-text-emphasis) !important;
}

.text-primary {
    color: var(--bs-primary) !important;
}

.bg-primary {
    background-color: var(--bs-primary) !important;
}

.border-primary {
    border-color: var(--bs-primary) !important;
}

.link-primary {
    color: var(--bs-primary) !important;
}

.link-primary:hover {
    color: var(--bs-primary-text-emphasis) !important;
}

.badge-primary {
    background-color: var(--bs-primary) !important;
}

.progress-bar {
    background-color: var(--bs-primary) !important;
}

.form-control:focus,
.form-select:focus {
    border-color: var(--bs-primary) !important;
    box-shadow: 0 0 0 0.25rem rgba({$rgbString}, 0.25) !important;
}

.nav-pills .nav-link.active {
    background-color: var(--bs-primary) !important;
}

.navbar-nav .nav-link.active {
    color: var(--bs-primary) !important;
}

.vertical-menu .navbar-nav .nav-item .nav-link.active {
    color: var(--bs-primary) !important;
    background-color: rgba({$rgbString}, 0.1) !important;
}

.dropdown-item:hover,
.dropdown-item:focus {
    background-color: rgba({$rgbString}, 0.1) !important;
}

.card-border-primary {
    border-color: var(--bs-primary) !important;
}

.page-item.active .page-link {
    background-color: var(--bs-primary) !important;
    border-color: var(--bs-primary) !important;
}

.form-check-input:checked {
    background-color: var(--bs-primary) !important;
    border-color: var(--bs-primary) !important;
}

/* Sidebar styling */
.navbar-brand-box {
    background: var(--bs-primary) !important;
}

.app-menu .navbar-brand-box {
    background: var(--bs-primary) !important;
}

/* Active menu items in sidebar */
.vertical-menu .has-arrow.active:after,
.vertical-menu .mm-active > .has-arrow:after {
    color: var(--bs-primary) !important;
}

.vertical-menu .navbar-nav .nav-item .nav-link:hover {
    color: var(--bs-primary) !important;
}";

        $response = new Response($css);
        $response->headers->set('Content-Type', 'text/css');
        
        // Cache na 1 godzinę
        $response->setMaxAge(3600);
        $response->setPublic();
        
        return $response;
    }

    private function hexToRgb(string $hex): array
    {
        $hex = ltrim($hex, '#');
        
        if (strlen($hex) == 3) {
            $hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
        }
        
        return [
            hexdec(substr($hex, 0, 2)),
            hexdec(substr($hex, 2, 2)),
            hexdec(substr($hex, 4, 2))
        ];
    }

    private function darkenColor(string $hex, int $percent): string
    {
        $rgb = $this->hexToRgb($hex);
        
        foreach ($rgb as &$color) {
            $color = max(0, min(255, $color - ($color * $percent / 100)));
        }
        
        return sprintf('#%02x%02x%02x', $rgb[0], $rgb[1], $rgb[2]);
    }
}