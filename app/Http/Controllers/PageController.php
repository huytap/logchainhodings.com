<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Content;
use App\Models\Globalnetwork;

class PageController extends Controller
{
    public function __construct()
    {
    }
    public function index($slug)
    {
        $menu = Menu::getBySlug($slug);
        if (!empty($menu)) {
            $title = $menu->title ?? $menu->name . ' - Logchain Group';
            $content = Content::getByMenu($menu->id);
            $collection = collect($content);
            switch ($menu->id) {
                case 1:
                    return view('clients.page.management', compact('title', 'menu', 'collection'));
                case 2:
                    return view('clients.page.structure', compact('title', 'menu', 'collection'));
                case 3:
                    $network = Globalnetwork::getList();
                    return view('clients.page.network', compact('title', 'menu', 'network'));
                case 4:
                    return view('clients.page.contact', compact('title', 'menu'));
                default:
                    return 404;
            }
        } else {
            return 404;
        }
    }
}
