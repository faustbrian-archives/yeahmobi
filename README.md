# YeahMobi PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/YeahMobi-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/YeahMobi-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/yeahmobi-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/YeahMobi-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/YeahMobi-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/YeahMobi-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/YeahMobi-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require faustbrian/yeahmobi-php-client
```

## Usage

```php
$client = new BrianFaust\YeahMobi\Client();
$client->setConfig(['apiKey' => 'YOUR_API_KEY']);

$response = $client->api('Offers')->findAll(['limit' => 5]);

dump($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
