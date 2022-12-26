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
        'banner_description',
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
        $menu = Menu::query()
            ->whereJsonContains('slug->'. app()->getLocale(), $slug)
            ->where('status', 0)
            ->first();
        return $menu;
    }

    public function getSlugAttribute($value)
    {
        if ($value != null && $value != "") {
            return json_decode($value, true);
        }
        return $value;
    }

    public function getNameAttribute($value)
    {
        if ($value != null && $value != "") {
            return json_decode($value, true);
        }
        return $value;
    }

    public function getBannerTitleAttribute($value)
    {
        if ($value != null && $value != "") {
            return json_decode($value, true);
        }
        return $value;
    }
    public function getBannerDescriptionAttribute($value)
    {
        if ($value != null && $value != "") {
            return json_decode($value, true);
        }
        return $value;
    }
    public function getSeoTitleAttribute($value)
    {
        if ($value != null && $value != "") {
            return json_decode($value, true);
        }
        return $value;
    }
    public function getSeoDescriptionAttribute($value)
    {
        if ($value != null && $value != "") {
            return json_decode($value, true);
        }
        return $value;
    }
}
