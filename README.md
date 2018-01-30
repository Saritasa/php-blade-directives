# PHP Blade Directives

[![Build Status](https://travis-ci.org/Saritasa/php-blade-directives.svg?branch=master)](https://travis-ci.org/Saritasa/php-blade-directives)
[![Release](https://img.shields.io/github/release/saritasa/php-blade-directives.svg)](https://github.com/Saritasa/php-blade-directives/releases)
[![PHPv](https://img.shields.io/packagist/php-v/saritasa/blade-directives.svg)](http://www.php.net)
[![Downloads](https://img.shields.io/packagist/dt/saritasa/blade-directives.svg)](https://packagist.org/packages/saritasa/blade-directives)

Custom Blade directives for Laravel Applications.

See https://laravel.com/docs/blade


## Laravel 5.x

Install the ```saritasa/blade-directives``` package:

```bash
$ composer require saritasa/blade-directives
```

If you use Laraval 5.4 or less,
or 5.5+ with [package discovery](https://laravel.com/docs/5.5/packages#package-discovery) disabled,
add the BladeDirectivesServiceProvider service provider ``config/app.php``:

```php
'providers' => array(
    // ...
    Saritasa\Laravel\BladeDirectivesServiceProvider::class,
)
```

## Available directives

### @activeIfRoute(routeName)
Output word 'active' if URL, requested by user, matches provided route name

**Example**:
```
<li class="@activeIfRoute('user.settings')">
    <a href="{{ route('user.settings') }}">Settings</a>
</li>
```

### @selectedIf(expression)
Output word 'selected' if passed expression evaluates to true

**Example**:
```
<select>
    @foreach($users as $user)
        <option value='{{ $user->id }}' @selectedIf($user->id == $currentUserId)>{{ $user->name }}</option>
    @endforeach
</select>
```

## Contributing

1. Create fork, checkout it
2. Develop locally as usual. **Code must follow [PSR-1](http://www.php-fig.org/psr/psr-1/), [PSR-2](http://www.php-fig.org/psr/psr-2/)** -
    run [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) to ensure, that code follows style guides
3. Update [README.md](README.md) to describe new or changed functionality.
4. Add changes description to [CHANGES.md](CHANGES.md) file.
5. When ready, create pull request

### Make shortcuts

If you have [GNU Make](https://www.gnu.org/software/make/) installed, you can use following shortcuts:

* ```make cs``` (instead of ```php vendor/bin/phpcs```) -
    run static code analysis with [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
    to check code style
* ```make csfix``` (instead of ```php vendor/bin/phpcbf```) -
    fix code style violations with [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
    automatically, where possible (ex. PSR-2 code formatting violations)
* ```make install``` - instead of ```composer install```
* ```make all``` or just ```make``` without parameters -
    invokes described above **install**, **cs** tasks sequentially -
    project will be assembled and checked with linter with one single command

## Resources

* [Bug Tracker](http://github.com/saritasa/php-blade-directives/issues)
* [Code](http://github.com/saritasa/php-blade-directives)
* [Changes History](CHANGES.md)
* [Authors](http://github.com/saritasa/php-blade-directives/contributors)
