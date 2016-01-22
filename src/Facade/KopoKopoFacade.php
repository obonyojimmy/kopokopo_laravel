<?php

namespace Obonyojimmy\Kopokopo_laravel\Facade;

use Illuminate\Support\Facades\Facade;

class KopoKopoFacade extends Facade
{
    protected static function getFacadeAccessor() {
      return 'Obonyojimmy\Kopokopo_laravel\Contract\ApiContract';
    }
}
