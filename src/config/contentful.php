<?php
/**
 * @copyright 2016-2017 Contentful GmbH
 * @license   MIT
 */

return [
    /**
     * The ID of the space you want to access
     */
    'delivery.space' => '',

    /**
     * An API key for the above specified space
     */
    'delivery.token' => '',

    /**
     * Controls whether Contentful's Delivery or Preview API is accessed
     */
    'delivery.preview' => false,

    /**
     * Sets the locale in which to fetch content by default. NULL means the space'd default locale will be used
     */
    'delivery.defaultLocale' => null
];
