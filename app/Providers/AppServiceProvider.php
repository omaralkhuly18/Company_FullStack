<?php

namespace App\Providers;

use App\Models\MenuManage;
use App\Models\OtherPageCustomPage;
use App\Models\OtherPagePrivacy;
use App\Models\OtherPageTerm;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
    public function boot()
    {
        if (Schema::hasTable('settings')) {
            $setting = Setting::latest()->first();
            View::share('setting', Setting::latest()->first());
            if($setting){
            LaravelLocalization::setLocale($setting->language);
            }
        }
        if (Schema::hasTable('menu_manages')) {
            View::share('Menus', MenuManage::where('status', 1)->get());
        }
        if (Schema::hasTable('other_page_terms')) {
            View::share('Term', OtherPageTerm::latest()->first());
        }
        if (Schema::hasTable('other_page_privacies')) {
            View::share('Privacy', OtherPagePrivacy::latest()->first());
        }
        if (Schema::hasTable('other_page_custom_pages')) {
            View::share('CustomPages', OtherPageCustomPage::all());
        }
        
    }
}
