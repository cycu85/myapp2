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

    #[Route('/assets/css/dynamic-theme.css', name: 'dynamic_css')]
    public function generateCss(): Response
    {
        $primaryColor = $this->settingService->get('primary_color', '#405189');
        $sidebarBgColor = $this->settingService->get('sidebar_bg_color', '#2a3042');
        $sidebarTextColor = $this->settingService->get('sidebar_text_color', '#ffffff');
        
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

/* Sidebar styling - używa niestandardowych kolorów */
.navbar-brand-box {
    background: {$sidebarBgColor} !important;
}

.app-menu {
    background-color: {$sidebarBgColor} !important;
}

.app-menu.navbar-menu {
    background-color: {$sidebarBgColor} !important;
}

.vertical-menu {
    background-color: {$sidebarBgColor} !important;
}

[data-sidebar=\"dark\"] .app-menu {
    background-color: {$sidebarBgColor} !important;
}

[data-sidebar=\"dark\"] .vertical-menu {
    background-color: {$sidebarBgColor} !important;
}

html[data-sidebar=\"dark\"] .app-menu {
    background: {$sidebarBgColor} !important;
}

html[data-sidebar=\"dark\"] .vertical-menu {
    background: {$sidebarBgColor} !important;
}

#layout-wrapper .app-menu {
    background: {$sidebarBgColor} !important;
}

.sidebar-enable .app-menu {
    background-color: {$sidebarBgColor} !important;
}

/* Menu items styling - używa niestandardowego koloru tekstu */
.vertical-menu .navbar-nav .nav-item .nav-link {
    color: {$sidebarTextColor} !important;
    opacity: 0.8;
}

.vertical-menu .navbar-nav .nav-item .nav-link:hover {
    background-color: rgba(" . implode(', ', $this->hexToRgb($sidebarTextColor)) . ", 0.1) !important;
    color: {$sidebarTextColor} !important;
    opacity: 1;
}

.vertical-menu .navbar-nav .nav-item .nav-link.active {
    background-color: rgba(" . implode(', ', $this->hexToRgb($sidebarTextColor)) . ", 0.2) !important;
    color: {$sidebarTextColor} !important;
    opacity: 1;
}

.vertical-menu .navbar-nav .menu-title {
    color: {$sidebarTextColor} !important;
    opacity: 0.6;
}

.vertical-menu .navbar-nav .nav-item .nav-link i {
    color: {$sidebarTextColor} !important;
    opacity: 0.8;
}

.vertical-menu .navbar-nav .nav-item .nav-link.active i {
    color: {$sidebarTextColor} !important;
    opacity: 1;
}

.vertical-menu .navbar-nav .nav-item .nav-link:hover i {
    color: {$sidebarTextColor} !important;
    opacity: 1;
}

#scrollbar::-webkit-scrollbar-thumb {
    background-color: rgba(" . implode(', ', $this->hexToRgb($sidebarTextColor)) . ", 0.2) !important;
}

.navbar-brand-box:hover {
    background-color: " . $this->darkenColor($sidebarBgColor, 10) . " !important;
}

/* Dropdown menu styling */
.vertical-menu .navbar-nav .nav-item .menu-dropdown {
    background-color: rgba(" . implode(', ', $this->hexToRgb($sidebarTextColor)) . ", 0.05) !important;
}

.vertical-menu .navbar-nav .nav-item .menu-dropdown .nav-link {
    color: {$sidebarTextColor} !important;
    opacity: 0.7;
    padding-left: 3rem;
}

.vertical-menu .navbar-nav .nav-item .menu-dropdown .nav-link:hover {
    background-color: rgba(" . implode(', ', $this->hexToRgb($sidebarTextColor)) . ", 0.1) !important;
    opacity: 1;
}";

        $response = new Response($css);
        $response->headers->set('Content-Type', 'text/css');
        
        // Cache krótszy - 10 minut, żeby zmiany były szybciej widoczne
        $response->setMaxAge(600);
        $response->setPublic();
        
        // Dodaj ETag bazując na ustawieniach kolorów
        $etag = md5($primaryColor . $sidebarBgColor . $sidebarTextColor);
        $response->setEtag($etag);
        
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