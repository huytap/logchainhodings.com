<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    const CREATED_AT = 'created_at';
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'link_url', 'status', 'created_at'];

    public function scopeSearch($query){
        //dd($query);
        if($key = request()->key){
            $query = $query->where('name', 'like', '%'.$key.'%' );
        }
        if($status = request()->status){
            $query = $query->where('status', '=', $status);
        }
        return $query;
    }
}
