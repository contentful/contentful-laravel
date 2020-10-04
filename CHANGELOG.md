# Changelog

All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased](https://github.com/contentful/contentful-laravel/compare/8.0.1...HEAD)

<!-- PENDING-CHANGES -->
> No meaningful changes since last release.
<!-- /PENDING-CHANGES -->

## [8.0.1](https://github.com/contentful/contentful-laravel/tree/8.0.1) (2020-10-04)

### Changed

> Remove closure from configuration file.

## [8.0.0](https://github.com/contentful/contentful-laravel/tree/8.0.0) (2020-09-15)

### Added

> Support for Laravel 8

## [7.0.2](https://github.com/contentful/contentful-laravel/tree/7.0.2) (2020-09-10)

### Changed

> Fix closures will not serialize with Laravel 7

## [7.0.1](https://github.com/contentful/contentful-laravel/tree/7.0.1) (2020-09-10)

> No meaningful changes since last release.

## [7.0.0](https://github.com/contentful/contentful-laravel/tree/7.0.0) (2020-05-14)

### Changed

* Configs are now accessible in a more Laravel-friendly way, i.e. config('contentful.delivery.space'); as opposed to config('contentful')['delivery.space'];

## [6.0.0](https://github.com/contentful/contentful-laravel/tree/6.0.0) (2020-03-24)

### Changed

* Added support for PHP 7.4
* Removed support for PHP 7.0 & PHP 7.1
* Added support for Laravel 6
* Upgraded components

## [5.0.0](https://github.com/contentful/contentful-laravel/tree/5.0.0) (2020-02-24)

### Changed

* Updated contentful/contenful dependency and releasing as a major version due to breaking changes in dependencies

## [4.0.2](https://github.com/contentful/contentful-laravel/tree/4.0.2) (2019-11-26)

* Added support for Laravel 6

## [4.0.1](https://github.com/contentful/contentful-laravel/tree/4.0.1) (2019-01-08)

### Fixed
* Fixed a bug where the SDK would use the Delivery API regardless of configuration.

## [4.0.0](https://github.com/contentful/contentful-laravel/tree/4.0.0) (2018-11-12)

**ATTENTION**: This release contains breaking changes. Please take extra care when updating to this version.

### Changed
* Use version 4.0 of the Contentful SDK. **[BREAKING]** This release contains breaking changes, you can read more about them in the SDK Changelog for [version 4.0.0](https://github.com/contentful/contentful.php/releases/tag/4.0.0).

## [3.0.0](https://github.com/contentful/contentful-laravel/tree/3.0.0) (2018-06-25)

**ATTENTION**: This release contains breaking changes. Please take extra care when updating to this version.

### Changed
* Use version 3.0 of the Contentful SDK. **[BREAKING]** This release contains breaking changes, you can read more about them in the SDK Changelog for [version 3.0.0](https://github.com/contentful/contentful.php/releases/tag/3.0.0).

## [2.0.0](https://github.com/contentful/contentful-laravel/tree/2.0.0) (2017-06-13)

**ATTENTION**: This release contains breaking changes. Please take extra care when updating to this version.

### Changed
* Use version 2.0 of the Contentful SDK. **[BREAKING]** This release contains breaking changes, you can read more about them in the SDK Changelog for [version 2.0.0](https://github.com/contentful/contentful.php/releases/tag/2.0.0).

## [1.0.0](https://github.com/contentful/contentful-laravel/tree/1.0.0) (2017-04-26)

### Changed
* Use version 1.0 of the Contentful SDK.

## [0.8.0-beta](https://github.com/contentful/contentful-laravel/tree/0.8.0-beta) (2017-04-12)

### Added
* The ability to set the default locale for querying the space by setting `delivery.defaultLocale`

### Changed
* Use version 0.8 of the Contentful SDK. **Note:** This release contains breaking changes, you can read more about them
in the change logs for [version 0.7](https://github.com/contentful/contentful.php/releases/tag/0.7.0-beta) and [version 0.8](https://github.com/contentful/contentful.php/releases/tag/0.8.0-beta).

## [0.6.0-beta](https://github.com/contentful/contentful-laravel/tree/0.6.0-beta) (2017-04-05)

Initial release
