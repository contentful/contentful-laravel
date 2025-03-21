<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2025 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\Tests\Laravel\Unit;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Orchestra\Testbench\Concerns\CreatesApplication;

class ConfigTest extends BaseTestCase
{
    use CreatesApplication;

    public function testGetConfig()
    {
        $this->assertSame('test_space', config('contentful.delivery.space'));
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('contentful.delivery.space', 'test_space');
    }
}
