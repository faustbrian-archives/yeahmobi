# YeahMobi PHP Client

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

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
