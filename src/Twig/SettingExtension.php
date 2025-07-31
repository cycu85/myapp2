<?php

namespace App\Twig;

use App\Service\SettingService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class SettingExtension extends AbstractExtension
{
    public function __construct(
        private SettingService $settingService
    ) {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('setting', [$this, 'getSetting']),
            new TwigFunction('app_name', [$this, 'getAppName']),
            new TwigFunction('company_logo', [$this, 'getCompanyLogo']),
            new TwigFunction('primary_color', [$this, 'getPrimaryColor']),
        ];
    }

    public function getSetting(string $key, ?string $defaultValue = null): ?string
    {
        return $this->settingService->get($key, $defaultValue);
    }

    public function getAppName(): string
    {
        return $this->settingService->get('app_name', 'AssetHub');
    }

    public function getCompanyLogo(): string
    {
        return $this->settingService->get('company_logo', '/assets/images/logo-dark.png');
    }

    public function getPrimaryColor(): string
    {
        return $this->settingService->get('primary_color', '#405189');
    }
}