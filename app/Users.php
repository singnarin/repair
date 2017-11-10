<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Departments;

class Users extends Model
{
  public $timestamps = false;
  public function department(){
    return $this->belongsTo('App\Departments');
  }
}
