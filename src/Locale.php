<?php

namespace Wotz\LocaleCollection;

use Illuminate\Support\Str;
use Illuminate\Support\Traits\Macroable;

class Locale
{
    use Macroable;

    public function __construct(
        private string $locale,
        private mixed $url = null,
        private ?string $urlLocale = null,
        private array $extras = []
    ) {
        if (! $this->url) {
            $this->url = config('app.url');
        }

        if (is_null($this->urlLocale)) {
            $this->urlLocale = $this->locale;
        }
    }

    public function locale(): string
    {
        return $this->locale;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function urlLocale(): string
    {
        return $this->urlLocale;
    }

    public function urlWithLocale(): string
    {
        return app('url')->format($this->url(), $this->urlLocale());
    }

    public function browserLocale(): string
    {
        return Str::before($this->browserLocaleWithCountry(), '_');
    }

    public function browserLocaleWithCountry(): string
    {
        return Str::replace('-', '_', $this->locale);
    }

    public function extras(?string $key = null): mixed
    {
        if ($key) {
            return $this->extras[$key] ?? null;
        }

        return $this->extras;
    }
}
