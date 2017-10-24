<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Departments;
class Repairs extends Model
{
  public $timestamps = false;
  public function Department(){
    return $this->belongsTo('App\Departments');
  }
  public function Type(){
    return $this->belongsTo('App\Types');
  }
  public function Status(){
    return $this->belongsTo('App\Statuses');
  }
}
