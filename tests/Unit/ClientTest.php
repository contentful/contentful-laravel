<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

namespace Contentful\Tests\Laravel\Unit;

use Contentful\Delivery\Client;
use Contentful\Laravel\Facades\ContentfulDelivery;
use Contentful\Tests\Laravel\TestCase;

class ClientTest extends TestCase
{
    public function testGetSpaceId()
    {
        $this->assertInstanceOf(Client::class, ContentfulDelivery::getFacadeRoot());
    }
}
