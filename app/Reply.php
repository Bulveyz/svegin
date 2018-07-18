<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
  protected $guarded = [];
  protected $with = ['creator'];

  public function replyed()
  {
    return $this->morphTo();
  }

  public function creator()
  {
      return $this->belongsTo(User::class, 'user_id');
  }
}
