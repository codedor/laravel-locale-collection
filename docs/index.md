# Locale Collection for Laravel

## Introduction

When it comes to handling translated routes, the process can be complex and time-consuming. That's where the Translatable Routes package for Laravel comes in! This package provides a simple and intuitive way to manage translated routes in your Laravel application. With its fluent API and flexible configuration options, it makes it easy to define and generate translated routes, streamlining the localization process and making it faster and easier for developers to handle translated URLs. Whether you're building a multi-lingual web application or simply need to handle translated routes, the Translatable Routes package for Laravel is a must-have tool.

## Installation

First, install this package via the Composer package manager:

```bash
composer require codedor/laravel-locale-collection
```

In the `AppServiceProvider` (or where you prefer) the Locale can be defined.

```php
use \Codedor\LocaleCollection\Facades\LocaleCollection;
use Codedor\LocaleCollection\Locale;

public function boot()
{
    LocaleCollection::add(new Locale('nl'))
        ->add(new Locale('fr'));
}
```

See the [Locale class](#locale-class) section for more information.

## Locale class

### Signature

```php
new \Codedor\LocaleCollection\Locale(string $locale, ?string $url = null, ?string $urlLocale = null, array $extras = [])
```

1. Where first parameter is the full locale name, can be `nl-BE` or `nl`.
1. Second parameter is the url (will default to the app url)
1. Third parameter is the locale used in the url (will default to the locale)
1. Fourth parameter is an array with extras, e.g. to change default layout per locale

## Locale Collection

This extends the `Illuminate\Support\Collection` class, so you can do whatever you want with the Locale objects.
And since it is a facade, it can be easily extended in your app (if you want to use your own Locale class or apply more custom logic), see [here](https://laravel.com/docs/container#extending-bindings) more about it or by using a [macro](https://laravel.com/docs/collections#extending-collections).

### Get current locale

Via the LocaleCollection facade you can the the current locale: `Codedor\LocaleCollection\Facades\LocaleCollection::getCurrent()`. This returns the current locale or a fallback.

### Set current locale

By calling `setCurrent()` you can set the current locale, if you want to switch the locale yourself or are applying your own middleware.

### Fallback locale

`fallback()` will return a fallback locale. It will go through these checks to give something back:

1. Check if locale cookie is set and locale is allowed
1. Check if a browser locale matches our defined locales
1. Check if one of the locales start with the browser locale (and other way around)
1. Get the fallback locale (`app.fallback_locale` config)
1. Return the first locale
