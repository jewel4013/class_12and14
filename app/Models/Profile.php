<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['date_of_birth'];

    public function owner(){
        return $this->belongsTo('App\Models\User');
    }
}
