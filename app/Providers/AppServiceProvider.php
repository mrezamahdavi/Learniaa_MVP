<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Tag;

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
        // Load Category Table After Start Website For All Pages
        $categories = Category::all();
        $tags = Tag::all();
        View::share('categories',$categories);
        View::share('tags',$tags);

        Schema::defaultStringLength(191);
    }
}
