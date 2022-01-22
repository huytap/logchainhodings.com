<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testers extends Model{
    const CREATED_AT = 'created_at';
    use HasFactory;
    public $timestamps = false;
    protected $table = 'testers';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'photo', 'content', 'status', 'created_at'];
    // protected $attributes = [
    //     'delayed' => false,
    // ];
    public function scopeSearch($query){
        if($key = request()->key){
            $query = $query->where('name', 'like', '%'.$key.'%');
        }
        return $query;
    }
}
