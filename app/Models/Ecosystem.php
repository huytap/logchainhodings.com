<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecosystem extends Model
{
    const CREATE_AT = 'create_at';
    use HasFactory;
    protected $fillable = ['photo', 'logo', 'description', 'link', 'priority', 'status', 'created_by', 'updated_by'];

    public function scopeSearch($query)
    {
        if ($status = request()->status) {
            $query = $query->where('status', '=', $status);
        }
        return $query;
    }

    public static function getList()
    {
        $data = Ecosystem::where('status', 0)
            ->orderBy('priority')
            ->get();
        return $data;
    }
}
