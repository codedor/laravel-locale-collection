<?php

namespace Wotz\LocaleCollection\Providers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wotz\LocaleCollection\LocaleCollection;

class LocaleCollectionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-locale-collection')
            ->setBasePath(__DIR__ . '/../');
    }

    public function registeringPackage(): void
    {
        $this->app->singleton(LocaleCollection::class, function () {
            return new LocaleCollection;
        });
    }
}
