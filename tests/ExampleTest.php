<?php

namespace Rognales\Air\Tests;

use Orchestra\Testbench\TestCase;
use Rognales\Air\AirServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AirServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
