# PHP Blade Directives

Custom Blade directives for Laravel Applications.

See https://laravel.com/docs/5.4/blade


## Laravel 5.x

Install the ``saritasa/php-blade-directives`` package:

```bash
$ composer require saritasa/php-blade-directives
```

Add the BladeDirectivesServiceProvider service provider ``config/app.php``:

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
3. Develop locally as usual
4. When ready, create pull request

## Resources

* [Bug Tracker](http://github.com/saritasa/php-blade-directives/issues)
* [Code](http://github.com/saritasa/php-blade-directives)
