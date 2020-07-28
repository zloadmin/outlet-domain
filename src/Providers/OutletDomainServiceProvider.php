<?php
declare(strict_types=1);
namespace LaravelOutletDomain\Providers;
use Illuminate\Support\ServiceProvider;

class OutletDomainServiceProvider extends ServiceProvider
{
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