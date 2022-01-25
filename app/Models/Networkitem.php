<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Networkitem extends Model
{
    protected $table = 'network_items';
    const CREATE_AT = 'create_at';

    use HasFactory;
    protected $fillable = ['globalnetwork_id', 'photo', 'original_name', 'file_size', 'file_type', 'priority', 'status', 'created_by', 'updated_by'];

    public function scopeSearch($query)
    {
        if ($status = request()->status) {
            $query = $query->where('status', '=', $status);
        }
        return $query;
    }

    public static function getList($global_id)
    {
        $data = Networkitem::where('status', 0)
            ->where('globalnetwork_id', $global_id)
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
