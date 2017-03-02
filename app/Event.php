<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function Category(){
        return $this->belongsTo('App\Category');
    }
}
