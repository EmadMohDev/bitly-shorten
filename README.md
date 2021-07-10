# Laravel Bitly Shortner Package
Shorten long urls by using Bitly Api


## INSTALLATION

Install the package through [Composer](http://getcomposer.org/).

`composer require darshphpdev/bitly-shortner`

## CONFIGURATION

to make your own token to can use bitly api

```php
php artisan vendor:publish --tag="bitlyconfig"
```


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
