<?php

namespace OrlandoLibardi\ContactCms\app\Providers;

use Illuminate\Support\Facades\Facade;

class OlCmsContac extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'OlCmsContac';
    }
}