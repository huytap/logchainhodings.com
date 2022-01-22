<?php

namespace App\Http\Services\Menu;

use App\Models\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class MenuService
{
    public static function getList()
    {
        return Menu::get();
    }
    public function create($request)
    {
        dd($request);
        try {
            Menu::create([
                'name' => (string)$request->input('name'),
                'slug' => (string)Str::slug($request->input('name'), '-'),
                'priority' => (int)$request->input('priority')
            ]);
            Session::flash('success', 'Add menu success');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }
        return true;
    }
}
