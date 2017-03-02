<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    public function Event(){
        $this->hasMany('App/Event');
    }
  /**
   * The attributes that aren't mass assignable.
   *
   * @var array
   */
  protected $guarded = [];
  /**
  * Setting primary key as rollno
  *
  */
  protected $primaryKey = 'rollno';
  public $incrementing = false;
}
