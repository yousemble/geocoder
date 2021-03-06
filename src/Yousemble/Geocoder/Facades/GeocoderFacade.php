<?php

namespace Yousemble\Geocoder\Facades;

use Illuminate\Support\Facades\Facade;

class GeocoderFacade extends Facade
{
    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor()
    {
        return 'Yousemble\Geocoder\Contracts\GeocoderService';
    }
}
