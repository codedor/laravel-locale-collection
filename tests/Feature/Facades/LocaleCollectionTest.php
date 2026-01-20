<?php

use Wotz\LocaleCollection\Facades\LocaleCollection;

it('has a registered facade', function () {
    expect(LocaleCollection::count())
        ->toBe(0);
});
