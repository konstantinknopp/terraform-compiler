<?php

namespace Avenity\TerraformCompiler\Tests;

use Avenity\TerraformCompiler\TerraformPackageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            TerraformPackageServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {

    }
}
