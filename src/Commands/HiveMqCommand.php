<?php

namespace SmartDato\HiveMq\Commands;

use Illuminate\Console\Command;

class HiveMqCommand extends Command
{
    public $signature = 'hivemq-sdk';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
