<?php

namespace App\Providers;

use App\Hieworks\Data;
use App\View\Components\Alert;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(255);
        // View::share(['job_categories'=>Data::jobCategories_source(),'home_categories'=>Data::jobCategories(),'job_locations' => Data::LOCATIONS]);
        Blade::component('alert', Alert::class);

        // Paginator::useTailwind();
        Paginator::defaultSimpleView('vendor.pagination.simple-default');
    }
}
