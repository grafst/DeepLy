<?php

namespace ChrisKonnertz\DeepLy\Integrations\Laravel;
use ChrisKonnertz\DeepLy\DeepLy;
use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;

class DeepLyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('deeply', function()
        {
            // Create a new DeepLy instance with the API key from .env file
            return new DeepLy(env('DEEPL_API_KEY'));
        });
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('DeepLy')
            ->hasConfigFile()
            //->hasMigration('')
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->copyAndRegisterServiceProviderInApp();
            });
    }
}
