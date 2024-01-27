<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Todo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('todo-list', function ($view) {
            $view->with('todos', Todo::take(6)->get());
        });
    }
}
