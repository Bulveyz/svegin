<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
  public function replyed()
  {
    return $this->morphTo();
  }
}
