<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class listing extends Model
{
    use HasFactory;
    //protected $fillable = ['titile', 'company', 'tags', 'description', 'location', 'website', 'email'];

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false) {
        $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false) {
        $query->where('title', 'like', '%' . request('search') . '%' )
                ->orwhere('description', 'like' , '%' . request('search') . '%')
                ->orwhere('tags', 'like', '%' . request('search') . '%' )
        ;}
    }

    public function user() {
        return $this->belongsTo(user::class, 'user_id');
        }


}
