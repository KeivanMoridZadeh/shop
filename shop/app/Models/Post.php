<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function likedBy(User $user){
        return $this->likes->contains('user_id',$user->id);
    }
    use HasFactory;
    protected $fillable = [
        'body',
        'title'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
