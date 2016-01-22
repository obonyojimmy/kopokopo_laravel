<?php

namespace Obonyojimmy\Kopokopo-laravel\Facade;

use Illuminate\Support\Facades\Facade;

class KopoKopoFacade extends Facade
{
    protected static function getFacadeAccessor() {
      return 'Obonyojimmy\Kopokopo\Contract\ApiContract';
    }
}
