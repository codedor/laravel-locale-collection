<?php

namespace Codedor\LocaleCollection\Providers;

use Codedor\LocaleCollection\LocaleCollection;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LocaleCollectionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-locale-collection')
            ->setBasePath(__DIR__ . '/../')
            ->hasConfigFile()
            ->hasMigration('create_package_table');
    }

    public function registeringPackage()
    {
        $this->app->singleton(LocaleCollection::class, function () {
            return new LocaleCollection();
        });
    }
}
