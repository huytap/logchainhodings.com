<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use App\Models\Menu;
use App\Models\Content;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Logchain Group';
        $menu = Menu::getBySlug('home');
        if (!empty($menu)) {
            $content = Content::getByMenu($menu->id);
            $collection = collect($content);
            return view('clients.home', compact('title', 'menu', 'collection'));
        }
    }
}
