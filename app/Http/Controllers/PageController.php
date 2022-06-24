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
    public function index($slug = 'introduce')
    {
        $menu = Menu::getBySlug($slug);
        if (!empty($menu)) {
            $title = $menu->title ?? $menu->name . ' - Logchain Group';
            $content = Content::getByMenu($menu->id);
            $collection = collect($content);
            switch ($menu->id) {
                case 1:
                    return view('clients.page.about', compact('title', 'menu', 'collection'));
                case 2:
                    return view('clients.page.team', compact('title', 'menu', 'collection'));
                case 3:
                    return view('clients.page.contact', compact('title', 'menu'));
                default:
                    return 404;
            }
        } else {
            return 404;
        }
    }
    public function about()
    {
        $title = 'About us';
        return view('clients.page.about', compact('title'));
    }
    public function ourteam()
    {
        $title = 'The team';
        return view('clients.page.team', compact('title'));
    }
    public function contact()
    {
        $title = 'Contact us';
        return view('clients.page.contact', compact('title'));
    }
}
