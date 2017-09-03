<?php

namespace WebTechNick\LaravelMacros\Test;

use Orchestra\Testbench\TestCase as Orchestra;
use WebTechNick\LaravelMacros\LaravelMacroServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [LaravelMacroServiceProvider::class];
    }
}