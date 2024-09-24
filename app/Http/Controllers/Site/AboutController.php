<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Services\SettingService;
use App\Services\TeamMemberCategoryService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    public $about_page, $team;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected SettingService $setting_service,
        protected TeamMemberCategoryService $team_category_service,
    ) {
        $this->about_page = Page::query()->whereSlug('about')->first();
        $this->team = $this->team_category_service->get(paginate:0 , relations:['members'], order:['order' , 'asc']);
        $settings = $this->setting_service->get(params: ['key', 'value'], paginate: 0)->pluck('value', 'key')->toArray();
        view()->share([
            'settings' => cacheAndGet('settings', now()->addDay(), $settings),
        ]);
    }

    public function index()
    {
        $data['page'] = $this->about_page;
        return view('site.about.index', $data);
    }

    public function team(Request $request , $theme)
    {
        $data['category'] = $this->team_category_service->find(id:decrypt($theme) ,relations:['members']);
        $data['title'] = $data['category']->name;
        $data['theme'] = 'ABOUT';
        $data['slug'] = $data['title'];
        return view('site.about.team' , $data);
    }



}
