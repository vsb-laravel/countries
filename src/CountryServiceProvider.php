<?php namespace Vsb;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;


class CountryServiceProvider extends LaravelServiceProvider {
    protected $defer = true;// Delay initializing this service for good performance
    public function provides() {
        return [LocationManager::class];
    }
    public function boot() {
        $this->registerRoutes();

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'countries');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'countries');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/countries'),
        ]);
        $this->publishes([
            __DIR__.'/../config/countries.php' => config_path('countries.php'),
        ]);
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/countries'),
        ]);
    }
    protected function registerRoutes()
    {
        Route::group([
            'prefix' => 'vsb',
            'namespace' => 'Vsb\Http\Controllers',
            // 'middleware' => config('vsb.middleware', 'web'),
        ], function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }
    public function register() {
        // Register Locations as service
        // $this->app->bind('vsb\Locations\LocationManager', function ($app) {
        //     return new LocationManager($app);
        // });
        // $this->app->singleton('test.locations', function ($app) {
        //     return new LocationManager($app);
        // });
        $this->mergeConfigFrom(__DIR__.'/../config/countries.php', 'countries');
    }
}
?>
