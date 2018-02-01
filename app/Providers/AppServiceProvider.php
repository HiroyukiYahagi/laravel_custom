<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductService;
use App\Services\TagService;
use App\Services\ContactService;
use App\Services\OGPService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ProductService::class, ProductService::class);
        $this->app->singleton(TagService::class, TagService::class);
        $this->app->singleton(ContactService::class, ContactService::class);
        $this->app->singleton(OGPService::class, OGPService::class);
        
    }
}
