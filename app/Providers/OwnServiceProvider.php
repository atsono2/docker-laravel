<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class OwnServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 新しくサービスプロバイダを作成したら、registerで登録し、config/appに追記する
        app()->bind('myName', function() {
            return 'Atsushi';
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
