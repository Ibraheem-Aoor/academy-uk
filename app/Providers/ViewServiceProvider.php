<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\TeamMemberCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $data = [
            'admin_sidebar_pages' => Page::query()->pluck('slug' , 'title')->toArray(),
            'team_categories' => TeamMemberCategory::query()->status(1)->get(),
        ];
        View::share($data);
    }
}
