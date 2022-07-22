<?php
namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use App\Models\Menu;
use App\Models\Content;
use App\Models\Ecosystem;
class HomeController extends Controller
{
    public function index()
    {
        $title = 'Logchain Group';
        $menu = Menu::getBySlug('home');
        if (!empty($menu)) {
            $title = $menu['seo_title'];
            $description = $menu['seo_description'];
            $content = Content::getByMenu($menu->id);
            $collection = collect($content);
            $ecosystems = Ecosystem::getList();
            return view('clients.home', compact('title', 'description', 'menu', 'collection', 'ecosystems'));
        }
    }
}
