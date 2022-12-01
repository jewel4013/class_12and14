<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M3mmpost extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function comments(){
        return $this->morphMany('App\Models\M3comment', 'commentable');
    }

    public function tags(){
        return $this->morphToMany('App\Models\M3Tag', 'taggable');
    }
}
