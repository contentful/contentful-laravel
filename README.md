# Contentful Laravel Integration

[![Build Status](https://travis-ci.org/contentful/contentful-laravel.svg?branch=master)](https://travis-ci.org/contentful/contentful-laravel)

Laravel integration for the Contentful SDK.

[Contentful][1] is a content management platform for web applications, mobile apps and connected devices. It allows you to create, edit & manage content in the cloud and publish it anywhere via powerful API. Contentful offers tools for managing editorial teams and enabling cooperation between organizations.

The SDK requires at least PHP 5.5.9. PHP 7 is supported.

# Setup

To add this package to your `composer.json` and install it execute the following command:

```bash
php composer require contentful/laravel
````

Add the service provider to the `providers` array in config/app.php:

```php
'providers' => [
    Contentful\Laravel\ContentfulServiceProvider::class,
],
```

## Configuration

Publish the config file:

```sh
php artisan vendor:publish --provider="Contentful/Laravel/ContentfulServiceProvider"
```

This will add contentful.php to your /config folder. Next, open that file and add your space ID and API key.

License
=======

Copyright (c) 2016-2017 Contentful GmbH. Code released under the MIT license. See [LICENSE][2] for further details.

 [1]: https://www.contentful.com
 [2]: LICENSE
