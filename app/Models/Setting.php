<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    const CREATED_AT = 'created_at';
    use HasFactory;
    public $timestamps = false;
    protected $table = 'settings';
    protected $primaryKey = 'id';
    protected $fillable = ['key', 'value', 'status'];
    // protected $attributes = [
    //     'delayed' => false,
    // ];
    public function scopeSearch($query){
        if($key = request()->key){
            $query = $query->where('key', 'like', '%'.$key.'%');
        }
        return $query;
    }
}