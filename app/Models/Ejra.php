<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ejra extends Model
{
    use HasFactory;
    //protected $fillable = ['titile', 'company', 'tags', 'description', 'location', 'website', 'email'];

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false) {
        $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false) {
        $query->where('e_name', 'like', '%' . request('search') . '%' )
                ->orwhere('details', 'like' , '%' . request('search') . '%')
                ->orwhere('s_tags', 'like', '%' . request('search') . '%' )
        ;}
    }

    // public function user() {
    //     return $this->belongsTo(user::class, 'user_id');
    //     }


}
