<?php

declare(strict_types=1);

namespace SaurabhSharma\TES;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TESServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('tes-laravel')
            ->hasConfigFile();
    }
}
