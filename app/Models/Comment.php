<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function commentable(){
        return $this->morphTo();
    }

    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relacion uno a mucho polimorfica
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function reactions(){
        return $this->morphMany(Reaction::class, 'reactionable');
    }

}
