<?php

namespace SaurabhSharma\TES;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SaurabhSharma\TES\TES
 */
class TESFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tes-laravel';
    }
}
