<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        view()->composer('blogs/sidebar', function($view){
            $view->with('archives', \App\Post::archives());
            $view->with('tags', \App\Tag::has('posts')->pluck('name'));
        });
        */
        view()->composer('blogs/sidebar', function($view){
            $archives = \App\Post::archives();
            $tags = \App\Tag::has('posts')->pluck('name');

            $view->with(compact('archives', 'tags'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*
        \App::singleton('App\Billing\Stripe', function(){
        return new \App\Billing\Stripe(config('services.stripe.secret'));
    });
        */
          $this->app->singleton(Stripe::class, function(){
        return new Stripe(config('services.stripe.secret'));
    });
    }
}
