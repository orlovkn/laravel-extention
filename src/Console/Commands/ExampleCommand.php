<?php

declare(strict_types=1);

namespace Orlovdev\LaravelExtention\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class ExampleCommand extends Command
{
    protected $signature = 'example-command';

    protected $description = 'Example Command';

    public function handle(): void
    {
        $this->info("Command executed with config param value " . Config::get('example.param'));
    }
}
