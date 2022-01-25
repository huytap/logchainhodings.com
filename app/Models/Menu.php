<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    const CREATED_AT = 'created_at';

    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'priority',
        'banner',
        'banner_title',
        'banner_mobile',
        'is_show',
        'status',
        'seo_title',
        'seo_description',
        'seo_thumbnailUrl',
        'created_by',
        'updated_by'
    ];

    public function scopeSearch($query)
    {
        if ($name = request()->name) {
            $query = $query->where('name', 'like', '%' . $name . '%');
        }

        if ($status = request()->status) {
            $query = $query->where('status', '=', $status);
        }

        return $query;
    }

    public static function getList()
    {
        $menus = Menu::where('is_show', 0)
            ->where('status', 0)
            ->orderBy('priority')
            ->get();
        return $menus;
    }

    public static function getList2()
    {
        $menus = Menu::where('status', 0)
            ->orderBy('priority')
            ->get();
        return $menus;
    }

    public static function getBySlug($slug)
    {
        $menu = Menu::where('slug', $slug)
            ->where('status', 0)
            ->first();
        return $menu;
    }
}
