<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\Laravel\Facades;

use Contentful\Delivery\Client;
use Illuminate\Support\Facades\Facade;

class ContentfulDelivery extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Client::class;
    }
}
