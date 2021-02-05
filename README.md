# Laravel Package for core support features used in Ecommerce packages

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tipoff/support.svg?style=flat-square)](https://packagist.org/packages/tipoff/support)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/tipoff/support/run-tests?label=tests)](https://github.com/tipoff/support/actions?query=workflow%3ATests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/tipoff/support.svg?style=flat-square)](https://packagist.org/packages/tipoff/support)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require tipoff/support
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Tipoff\Support\SupportServiceProvider" --tag="support-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Tipoff\Support\SupportServiceProvider" --tag="support-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$support = new Tipoff\Support();
echo $support->echoPhrase('Hello, Tipoff!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Tipoff](https://github.com/tipoff)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
