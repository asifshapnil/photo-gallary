<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
  public function users(){
    return $this->belongsToMany('App\User', 'PIVOT', 'user_id', 'invited_by');
  }
}
