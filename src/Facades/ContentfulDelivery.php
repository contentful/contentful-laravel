<?php
/**
 * @copyright 2016 Contentful GmbH
 * @license   MIT
 */

namespace Contentful\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

use Contentful\Delivery\Client as DeliveryClient;

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
