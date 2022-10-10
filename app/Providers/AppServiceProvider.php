<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\PostCardSendingService;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('postcard', function(){
            return new PostCardSendingService('Bd','4','6');
        });
    }
}
