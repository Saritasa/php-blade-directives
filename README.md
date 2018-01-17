# PHP Blade Directives

Custom Blade directives for Laravel Applications.

See https://laravel.com/docs/blade


## Laravel 5.x

Install the ```saritasa/blade-directives``` package:

```bash
$ composer require saritasa/blade-directives
```

If you use Laraval 5.4 or less,
or 5.5 with [package discovery](https://laravel.com/docs/5.5/packages#package-discovery) disabled,
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

1. Create fork
2. Checkout fork
3. Develop locally as usual. **Code must follow [PSR-1](http://www.php-fig.org/psr/psr-1/), [PSR-2](http://www.php-fig.org/psr/psr-2/)**
4. Run [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) to ensure, that code follows style guides
5. Update [README.md](README.md) to describe new or changed functionality. Add changes description to [CHANGES.md](CHANGES.md) file.
6. When ready, create pull request

## Resources

* [Bug Tracker](http://github.com/saritasa/php-blade-directives/issues)
* [Code](http://github.com/saritasa/php-blade-directives)
* [Changes History](CHANGES.md)
* [Authors](http://github.com/saritasa/php-blade-directives/contributors)
