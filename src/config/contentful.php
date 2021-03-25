<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2021 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

return [
    'delivery' => [
        /*
         * The ID of the space you want to access.
         */
        'space' => env('CONTENTFUL_SPACE_ID'),

        /*
         * The ID of the environment you want to access.
         */
        'environment' => env('CONTENTFUL_ENVIRONMENT_ID', 'master'),

        /*
         * An API key for the above specified space.
         */
        'token' => env('CONTENTFUL_DELIVERY_TOKEN'),

        /*
         * Controls whether Contentful's Delivery or Preview API is accessed.
         */
        'preview' => (bool) env('CONTENTFUL_USE_PREVIEW', false),

        /*
         * The default locale to use when querying the API.
         */
        'defaultLocale' => env('CONTENTFUL_DEFAULT_LOCALE'),

        /*
        * An array of further client options. See Contentful\Delivery\Client::__construct() for more.
        */
        'delivery.options' => [],
    ],
];
