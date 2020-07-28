<?php
declare(strict_types=1);
namespace LaravelOutletDomain\Providers;
use Illuminate\Support\ServiceProvider;
use LaravelOutletDomain\OutletDomainFactory;

class OutletDomainServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('outlet-domain', function () {
            return new OutletDomainFactory();
        });
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/outlet-domain.php' => config_path('outlet-domain.php'),
        ]);
    }

}