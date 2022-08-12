<?php

declare(strict_types=1);

namespace Orlovdev\LaravelExtention\Test;

use PHPUnit\Framework\TestCase;
use Orlovdev\LaravelExtention\Services\ExampleService;

final class ExampleServiceTest extends TestCase
{
    public function testItGetsSomeResult(): void
    {
        $service = new ExampleService();

        $this->assertEquals('bar', $service->getSomeResult());
    }
}
