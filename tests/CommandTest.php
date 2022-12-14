<?php

declare(strict_types=1);

namespace Orlovdev\LaravelExtention\Test;

class CommandTest extends FeatureTestCase
{
    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $app['config']->set('example.param', 200);
    }

    public function testItExecutesExampleCommand()
    {
        $output = $this->artisan('example-command');

        $output->assertExitCode(0);

        $output->expectsOutput("Command executed with config param value 200");
    }
}
