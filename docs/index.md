# Locale Collection for Laravel

## Introduction

The Locale Collection package manages and manipulates locale data. With this package, you can easily add, remove, and retrieve locales, making it simpler to implement multilingual features on your website or application. By using the LocaleCollection class, you can define and manage a collection of locales, which can then be used to set the language and region preferences for your users. Each locale is associated with a specific domain and language code, allowing for a fine-grained control over how localization is handled in your application.

## Installation

First, install this package via the Composer package manager:

```bash
composer require wotz/laravel-locale-collection
```

In the `AppServiceProvider` (or where you prefer) the Locale can be defined.

```php
use Wotz\LocaleCollection\Facades\LocaleCollection;
use Wotz\LocaleCollection\Locale;

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
new \Wotz\LocaleCollection\Locale(string $locale, ?string $url = null, ?string $urlLocale = null, array $extras = [])
```

1. Where first parameter is the full locale name, can be `nl-BE` or `nl`.
1. Second parameter is the url (will default to the app url)
1. Third parameter is the locale used in the url (will default to the locale)
1. Fourth parameter is an array with extras, e.g. to change default layout per locale

## Locale Collection

This extends the `Illuminate\Support\Collection` class, so you can do whatever you want with the Locale objects.
And since it is a facade, it can be easily extended in your app (if you want to use your own Locale class or apply more custom logic), see [here](https://laravel.com/docs/container#extending-bindings) more about it or by using a [macro](https://laravel.com/docs/collections#extending-collections).

### Get current locale

Via the LocaleCollection facade you can the the current locale: `Wotz\LocaleCollection\Facades\LocaleCollection::getCurrent()`. This returns the current locale or a fallback.

### Set current locale

By calling `setCurrent()` you can set the current locale, if you want to switch the locale yourself or are applying your own middleware.

### Fallback locale

`fallback()` will return a fallback locale. It will go through these checks to give something back:

1. Check if locale cookie is set and locale is allowed
1. Check if a browser locale matches our defined locales
1. Check if one of the locales start with the browser locale (and other way around)
1. Get the fallback locale (`app.fallback_locale` config)
1. Return the first locale
