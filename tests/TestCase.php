<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2021 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\Tests\Laravel;

use Contentful\Laravel\ContentfulServiceProvider;
use Contentful\Laravel\Facades\ContentfulDelivery;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function getPackageProviders($app)
    {
        return [ContentfulServiceProvider::class];
    }

    /**
     * {@inheritdoc}
     */
    protected function getPackageAliases($app)
    {
        return [
            'Contentful' => ContentfulDelivery::class,
        ];
    }
}
