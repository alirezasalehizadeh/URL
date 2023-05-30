# URL

An PHP tool for work with urls.


##  Requirements

PHP >= 8.2

## Installation
via Composer:
```
composer require alirezasalehizadeh/url
```


## Usage
```php
use Alirezasalehizadeh\URL\URL;


// URL-encodes string
URL::encode(string $string): string

// Decodes URL-encoded string
URL::decode(string $string): string

// Encodes data with MIME base64
URL::encodeBase64(string $string): string

// Decodes data encoded with MIME base64
URL::decodeBase64(string $string, bool $strict = false): string|false

// Parse a URL and return its components
URL::parse(string $string): array|string|int|false|null

// Fetches all the headers sent by the server in response to an HTTP request
URL::getHeaders(string $string, bool $associative = false, $context = null): array|false

// Extracts all meta tag content attributes from a file and returns an array
URL::getMetaTags(string $filename, bool $useIncludePath = false): array|false
```


## Contributing
Send pull request or open issue for contributing.


## License

[MIT](LICENSE).

