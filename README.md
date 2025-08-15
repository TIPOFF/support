# Laravel Package for core support features used in Ecommerce packages

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tipoff/support.svg?style=flat-square)](https://packagist.org/packages/tipoff/support)
![Tests](https://github.com/tipoff/support/workflows/Tests/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/tipoff/support.svg?style=flat-square)](https://packagist.org/packages/tipoff/support)

## Deprecated / Archived

This is a pain to keep updated so I am removing it as a dependency from other packages & so they can stand better in isolation & be updated faster to new versions of Laravel.

This is where your description should go of what all needs to be removed.

## Installation

You can install the package via composer:

```bash
composer require tipoff/support
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
