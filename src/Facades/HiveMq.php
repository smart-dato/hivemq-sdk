<?php

namespace SmartDato\HiveMq\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SmartDato\HiveMq\HiveMq
 */
class HiveMq extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \SmartDato\HiveMq\HiveMq::class;
    }
}
