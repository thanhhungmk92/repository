<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Patern\Notify;
use App\Patern\EmailOnly;
use App\Patern\LaravelMailer;


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
         \Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\ProductRepositoryInterface',
            'App\Repositories\Eloquents\ProductRepository'
        );

        $this->app->singleton(
            'App\Patern\Notify',
            'App\Patern\EmailOnly'
        );

        $this->app->singleton(
            'App\Patern\MailAdapter',
            'App\Patern\LaravelMailer'
        );

        $this->app->singleton(
            'App\Patern\SmsAdapter',
            'App\Patern\LaravelSms'
        );

        // $this->app->singleton('MailAdapter', function ($app) {
        //     return new LaravelMailer();
        // });

        // $this->app->singleton('Notify', function ($app) {
        //     return new EmailOnly(new LaravelMailer());
        // });

    }
}
