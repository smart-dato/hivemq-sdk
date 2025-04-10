<?php

namespace SmartDato\HiveMq;

use SmartDato\HiveMq\Commands\HiveMqCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HiveMqServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('hivemq-sdk')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_hivemq_sdk_table')
            ->hasCommand(HiveMqCommand::class);
    }
}
