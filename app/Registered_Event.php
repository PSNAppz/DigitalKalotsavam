<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registered_Event extends Model
{
    protected $table='registered__events';
    public function Event(){
        return $this->belongsTo('App\Event','eventid','id');
    }

    public function Student(){
        return $this->belongsTo('App\Student','rollno','rollno');
    }
}
