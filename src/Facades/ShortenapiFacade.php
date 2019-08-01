<?php 

namespace Daika7ana\Shortenapi\Facades;

use Illuminate\Support\Facades\Facade;

class ShortenapiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Daika7ana\Shortenapi\Shortenapi';
    }
}
