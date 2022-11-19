<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MorphUser extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images(){
        return $this->morphOne('App\Models\Images', 'imageable');
    }
}
