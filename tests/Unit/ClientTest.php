<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2023 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\Tests\Laravel\Unit;

use Contentful\Delivery\Client;
use Contentful\Laravel\Facades\ContentfulDelivery;
use Contentful\Tests\Laravel\TestCase;

class ClientTest extends TestCase
{
    public function testGetSpace()
    {
        $this->assertInstanceOf(Client::class, ContentfulDelivery::getFacadeRoot());
    }
}
