<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function Category(){
        $this->belongsTo('App\Category');
    }
}
