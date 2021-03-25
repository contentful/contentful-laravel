# Contentful Laravel Package

[![Packagist](https://img.shields.io/packagist/v/contentful/laravel.svg?style=for-the-badge)](https://packagist.org/packages/contentful/laravel)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/contentful/laravel.svg?style=for-the-badge)](https://packagist.org/packages/contentful/laravel)
[![Packagist](https://img.shields.io/github/license/contentful/contentful-laravel.svg?style=for-the-badge)](https://packagist.org/packages/contentful/laravel)
<img height="28px" src="https://circleci.com/gh/contentful/contentful-laravel.svg?style=shield"/>

> This library provides an easy-to-use integration between the Laravel framework and the Contentful Delivery SDK. It requires at least PHP 7.2 or PHP 8.0 and up.

## Setup

Add this package to your application by using [Composer](https://getcomposer.org/) and executing the following command:

``` bash
composer require contentful/laravel
```

Add the service provider to the `providers` array in `config/app.php`:

``` php
'providers' => [
    Contentful\Laravel\ContentfulServiceProvider::class,
],
```

## Configuration

Publish the config file:

``` sh
php artisan vendor:publish --provider="Contentful\Laravel\ContentfulServiceProvider"
```

This will add `contentful.php` to your `/config` folder. Next, add your space ID and API key to your `.env` file:

    CONTENTFUL_SPACE_ID="cfexampleapi"
    CONTENTFUL_DELIVERY_TOKEN="b4c0n73n7fu1"

## What is Contentful?

[Contentful](https://www.contentful.com) provides a content infrastructure for digital teams to power content in websites, apps, and devices. Unlike a CMS, Contentful was built to integrate with the modern software stack. It offers a central hub for structured content, powerful management and delivery APIs, and a customizable web app that enable developers and content creators to ship digital products faster.

## License

Copyright (c) 2015-2019 Contentful GmbH. Code released under the MIT license. See [LICENSE](LICENSE) for further details.
