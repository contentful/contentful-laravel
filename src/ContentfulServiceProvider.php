<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

namespace Contentful\Laravel;

use Contentful\Delivery\Client;
use Illuminate\Support\ServiceProvider;

class ContentfulServiceProvider extends ServiceProvider
{
    const VERSION = '3.0.0-dev';

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register any other events for your application.
     */
    public function boot()
    {
        $config_file = \realpath(__DIR__.'/config/contentful.php');

        $this->publishes([
            $config_file => $this->app->make('path.config').'/contentful.php',
        ]);

        $this->mergeConfigFrom($config_file, 'contentful');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton(Client::class, function ($app) {
            $config = $app['config']['contentful'];

            $client = new Client(
                $config['delivery.token'],
                $config['delivery.space'],
                $config['delivery.environment'],
                $config['delivery.preview'],
                $config['delivery.defaultLocale'],
                $config['delivery.options']
            );
            $client->setIntegration('contentful.laravel', self::VERSION);

            return $client;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Client::class];
    }
}
