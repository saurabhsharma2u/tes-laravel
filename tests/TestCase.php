<?php

declare(strict_types=1);

namespace SaurabhSharma\TES\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use SaurabhSharma\TES\TESServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            TESServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
