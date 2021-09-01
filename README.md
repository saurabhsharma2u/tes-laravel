# PHP Wrapper for 2N API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/saurabhsharma/tes-laravel.svg?style=flat-square)](https://packagist.org/packages/saurabhsharma/tes-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/saurabhsharma/tes-laravel/run-tests?label=tests)](https://github.com/saurabhsharma/tes-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/saurabhsharma/tes-laravel/Check%20&%20fix%20styling?label=code%20style)](https://github.com/saurabhsharma/tes-laravel/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/saurabhsharma/tes-laravel.svg?style=flat-square)](https://packagist.org/packages/saurabhsharma/tes-laravel)




## Installation

You can install the package via composer:

```bash
composer require saurabhsharma/tes-laravel
```


You can publish the config file with:
```bash
php artisan vendor:publish --provider="SaurabhSharma\TES\TESServiceProvider" --tag="tes-laravel-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
TES::System()->get_info(); // get System Info
TES::System()->get_status(); //get system Status
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

- [Saurabh Sharma](https://github.com/saurabhsharma2u)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
