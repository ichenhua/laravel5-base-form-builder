<?php

namespace Ichenhua\BaseFormBuilder;

use Illuminate\Support\ServiceProvider;

class BaseFormBuilderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/routes.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('base-search',function(){
            return new Component\BaseSearch();
        });
    }
}
