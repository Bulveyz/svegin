<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
  protected $guarded = [];

  public function replyed()
  {
    return $this->morphTo();
  }
}
