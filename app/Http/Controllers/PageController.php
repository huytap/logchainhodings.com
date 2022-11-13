<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Content;

class PageController extends Controller
{
    public function index($locale = '', $slug = '')
    {
        if ($slug == '') {
            $slug = $locale;
        }
        $locale = \App::getLocale();
        $lang = \App::getLocale();
        $menu = Menu::getBySlug($slug);
        if (!empty($menu)) {
            $title = $menu->title[$lang] ?? $menu->name[$lang] . ' - Logchain Holdings';
            if ($menu->seo_title[$lang]) {
                $title = $menu->seo_title[$lang] . ' - Logchain Holdings';
            }
            $description = $menu->seo_description[$lang] ?? 'Logchain Holdings';
            $content = Content::getByMenu($menu->id);
            $collection = collect($content);
            switch ($menu->id) {
                case 1:
                    return view('clients.page.about', compact('title', 'description', 'menu', 'collection', 'locale', 'lang'));
                case 2:
                    return view('clients.page.team', compact('title', 'description', 'menu', 'collection', 'locale', 'lang'));
                case 3:
                    return view('clients.page.contact', compact('title', 'description', 'menu', 'locale', 'lang'));
                default:
                    abort(404);
            }
        } else {
            abort(404);
        }
    }
    // public function about($locale = '')
    // {
    //     $title = 'About us';
    //     return view('clients.page.about', compact('title', 'locale'));
    // }
    // public function ourteam($locale = '')
    // {
    //     $title = 'The team';
    //     return view('clients.page.team', compact('title', 'locale'));
    // }
    public function contact($locale = '')
    {
        $lang = \App::getLocale();
        $title = trans('title.contact_us');
        return view('clients.page.contact', compact('title', 'locale', 'lang'));
    }
}
