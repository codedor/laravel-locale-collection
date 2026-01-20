# Locale Collection for Laravel

A package to define locales via a facade for your project.

## Installation

You can install the package via composer:

```bash
composer require wotz/laravel-locale-collection
```

## Usage

```php
use Wotz\LocaleCollection\Facades\LocaleCollection;
use Wotz\LocaleCollection\Locale;

LocaleCollection::add(new Locale('nl-BE', 'whoownsthezebra.be', 'nl'))
    ->add(new Locale('fr-BE', 'whoownsthezebra.be', 'fr'))
    ->add(new Locale('en-GB', 'whoownsthezebra.com', 'en'));
```

## Documentation

For the full documentation, check [here](./docs/index.md).

## Testing

```bash
vendor/bin/pest
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Upgrading

Please see [UPGRADING](UPGRADING.md) for more information on how to upgrade to a new version.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

If you discover any security-related issues, please email info@whoownsthezebra.be instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
