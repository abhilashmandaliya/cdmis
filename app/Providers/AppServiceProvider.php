<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\UserType;
use App\InstituteCategory;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('layouts.adminlayout', function($view) {
            $view->with('_userTypes', UserType::with('users')->get());
            $view->with('_instituteCategories', InstituteCategory::all());
            $view->with('isAdmin', UserType::find(Auth::user()->userTypeId)->id);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
