<?php

namespace App\Facades;

use App\Interfaces\ITouchService;
use Illuminate\Support\Facades\Facade;

class TouchFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ITouchService::class;
    }
}
