<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M3Tag extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function posts(){
        return $this->morphedByMany('App\Models\M3mmpost', 'taggable');
    }

    public function videos(){
        return $this->morphedByMany('App\Models\M3video', 'taggable');
    }

    // public function getRouteKeyName()
    // {
    //     return $this->getKeyName();
    // }

}
