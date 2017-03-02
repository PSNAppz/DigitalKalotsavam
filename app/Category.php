<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Event(){
        return $this->hasMany('App\Event');
    }
}
