<?php

namespace Saritasa\Laravel;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeDirectivesServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        Blade::directive('activeIfRoute', function ($expression) {
            return "<?php echo strpos(request()->route()->getName(), {$expression}) === 0 ? 'active' : ''; ?>";
        });
        Blade::directive('selectedIf', function ($expression) {
            return "<?php echo $expression ? 'selected' : ''; ?>";
        });
    }
}
