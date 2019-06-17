<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Post;
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
        // view()->composer('*',function($view){
        //     // $tags = Tag::orderBy('id', 'asc')->get();
        //     // $posts = Post::orderBy('id', 'desc')->get();
        //     // $view->with(['posts'=>$posts,'tags'=>$tags]);
        // });
    }
}
