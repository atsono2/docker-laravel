<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('HelpSpot\API', function ($app) {
            return new \HelpSpot\API($app->make('HttpClient'));
        });

        // Myclassを登録するだけで、Slackクラスへの依存関係も解決する
        $this->app->bind('myclass', \App\Http\Myclass::class);

        // $this->app->bind(
        //     \App\Http\Message::class,
        //     \App\Http\Myclass::class
        // );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
