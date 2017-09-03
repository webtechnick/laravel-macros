<?php

namespace WebTechNick\LaravelMacros;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class LaravelMacroServiceProvider extends ServiceProvider
{
    public function register()
    {
        if (Collection::hasMacro('noPreserveReverse')) {
            return;
        }

        Collection::macro('noPreserveReverse', function() {
            return new Collection(array_reverse($this->all(), false));
        });
    }
}