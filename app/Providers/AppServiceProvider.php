<?php

namespace App\Providers;

use App\Models\PricingTier;
use App\Models\TeamMember;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View as ViewFacade;
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
        ViewFacade::composer('components.pricing-table', function (View $view) {
            $view->with('pricingTiers', PricingTier::ordered()->get());
        });

        ViewFacade::composer('pages.homepage.partials.team', function (View $view) {
            $view->with('teamMembers', TeamMember::ordered()->get());
        });
    }
}
