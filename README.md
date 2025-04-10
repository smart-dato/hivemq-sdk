# This is my package hivemq-sdk

[![Latest Version on Packagist](https://img.shields.io/packagist/v/smart-dato/hivemq-sdk.svg?style=flat-square)](https://packagist.org/packages/smart-dato/hivemq-sdk)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/smart-dato/hivemq-sdk/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/smart-dato/hivemq-sdk/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/smart-dato/hivemq-sdk/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/smart-dato/hivemq-sdk/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/smart-dato/hivemq-sdk.svg?style=flat-square)](https://packagist.org/packages/smart-dato/hivemq-sdk)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.
OpenAPI Documenation can be found [here](https://docs.hivemq.com/hivemq-cloud/rest-api/specification/#section/Introduction)

## Installation

You can install the package via composer:

```bash
composer require smart-dato/hivemq-sdk
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="hivemq-sdk-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="hivemq-sdk-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="hivemq-sdk-views"
```

## Usage

```php
$hiveMq = new SmartDato\HiveMq();
echo $hiveMq->echoPhrase('Hello, SmartDato!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [SmartDato](https://github.com/smart-dato)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
