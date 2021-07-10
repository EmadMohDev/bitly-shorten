# bitly-shorten
Shorten long urls by using Bitly Api

# Laravel Bitly Shortner Package


## INSTALLATION

Install the package through [Composer](http://getcomposer.org/).

`composer require darshphpdev/bitly-shortner`

## CONFIGURATION

Optional configuration file (useful if you plan to have full control)

```php
php artisan vendor:publish --tag="bitlyconfig"
```

## HOW TO USE

-   [Quick Usage](#quick)
-   [Credits](#credits)
-   [License](#license)

## Quick Usage

```php
// In your controller
// Use The Helper class Bitly to shorten urls
use Bitly;

return Bitly::shorten('https://www.youtube.com');
```

## Credits

- [Emad Mohamed](https://github.com/EmadMohDev)

## License

The Http Client Package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
