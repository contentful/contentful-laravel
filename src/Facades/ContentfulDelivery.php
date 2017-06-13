<?php
/**
 * @copyright 2016-2017 Contentful GmbH
 * @license   MIT
 */

namespace Contentful\Laravel\Facades;

use Contentful\Delivery\Client as DeliveryClient;

use Illuminate\Support\Facades\Facade;

class ContentfulDelivery extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return  string
     */
     protected static function getFacadeAccessor()
     {
         return DeliveryClient::class;
     }
}
