<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M3video extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function comments(){
        return $this->morphMany('App\Models\M3comment', 'commentable');
    }
}
