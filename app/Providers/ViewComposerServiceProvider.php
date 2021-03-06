<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\NavbarMenuViewComposer;
use App\Http\ViewComposers\SidebarTagsViewComposer;
use App\Http\ViewComposers\SidebarCategoriesViewComposer;
use App\Http\ViewComposers\SidebarFeaturedPostsViewComposer;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontend.components.navbar', NavbarMenuViewComposer::class);

        View::composer('frontend.sidebar.featured_posts', SidebarFeaturedPostsViewComposer::class);
        View::composer('frontend.sidebar.categories', SidebarCategoriesViewComposer::class);
        View::composer('frontend.sidebar.tags', SidebarTagsViewComposer::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
