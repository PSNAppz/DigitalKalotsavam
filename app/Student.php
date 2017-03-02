<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

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

  public function Registered_Event(){
      return $this->hasMany('App\Registered_Event','rollno','rollno');
  }
}
