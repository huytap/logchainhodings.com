<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    const CREATE_AT = 'create_at';
    use HasFactory;
    protected $fillable = ['title', 'photo', 'photo_mobile', 'description', 'menu_id', 'content_section', 'priority', 'img_lang', 'images', 'images_mobile'];
    public function menu()
    {
        return $this->belongsTo('App\Models\Menu', 'menu_id');
    }

    public function scopeSearch($query)
    {
        if ($menu_id = request()->page_id) {
            $query = $query->where('menu_id', '=', $menu_id);
        }
        return $query;
    }

    public static function getByMenu($menu_id)
    {
        $content = Content::where('menu_id', $menu_id)
            ->orderBy('priority')
            ->get();
        return $content;
    }

    public function getTitleAttribute($value)
    {
        if ($value != null && $value != "") {
            return json_decode($value, true);
        }
        return $value;
    }
    public function getDescriptionAttribute($value)
    {
        if ($value != null && $value != "") {
            return json_decode($value, true);
        }
        return $value;
    }
    public function getImagesAttribute($value)
    {
        if ($value != null && $value != "") {
            return json_decode($value, true);
        }
        return $value;
    }
    public function getImagesMobileAttribute($value)
    {
        if ($value != null && $value != "") {
            return json_decode($value, true);
        }
        return $value;
    }
}
