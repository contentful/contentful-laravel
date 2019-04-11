<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2019 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

use Contentful\Delivery\ClientOptions;
use Illuminate\Foundation\Application;

return [
    /*
     * The ID of the space you want to access.
     */
    'delivery.space' => env('CONTENTFUL_SPACE_ID'),

    /*
     * The ID of the environment you want to access.
     */
    'delivery.environment' => env('CONTENTFUL_ENVIRONMENT_ID', 'master'),

    /*
     * An API key for the above specified space.
     */
    'delivery.token' => env('CONTENTFUL_DELIVERY_TOKEN'),

    /*
     * Controls whether Contentful's Delivery or Preview API is accessed.
     */
    'delivery.preview' => (bool) env('CONTENTFUL_USE_PREVIEW', false),

    /*
     * The default locale to use when querying the API.
     */
    'delivery.defaultLocale' => env('CONTENTFUL_DEFAULT_LOCALE'),

    /*
     * A closure which manipulates a ClientOptions object.
     * See Contentful\Delivery\ClientOptions for more.
     */
    'delivery.options' => function (ClientOptions $options, Application $application) {
        // Update $options however you prefer
    },
];
