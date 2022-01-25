<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Globalnetwork extends Model
{
    const CREATE_AT = 'create_at';
    use HasFactory;
    protected $fillable = ['title', 'priority', 'status', 'created_by', 'updated_by'];

    public function scopeSearch($query)
    {
        if ($status = request()->status) {
            $query = $query->where('status', '=', $status);
        }
        return $query;
    }

    public static function getList()
    {
        $data = Globalnetwork::where('status', 0)
            ->orderBy('priority')
            ->get();
        return $data;
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $userid = (!Auth::guest()) ? Auth::user()->id : null;
            $model->created_by = $userid;
            $model->updated_by = $userid;
        });

        static::updating(function ($model) {
            $userid = (!Auth::guest()) ? Auth::user()->id : null;
            $model->updated_by = $userid;
        });
    }
}
