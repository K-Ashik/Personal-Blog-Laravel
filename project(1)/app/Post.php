<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function posts(){
        return $this->belongsTo('App\Post');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
