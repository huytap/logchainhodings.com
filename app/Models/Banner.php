<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Banner extends Model
{
    const CREATE_AT = 'create_at';
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['photo', 'page_id', 'title', 'created_by', 'updated_by'];
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function scopeSearch($query)
    {
        if ($page_id = request()->page_id) {
            $query = $query->where('page_id', '=', $page_id);
        }
        return $query;
    }
}
