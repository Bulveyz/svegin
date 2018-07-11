<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
  use Replyer;
  protected $guarded = [];

  protected $with = ['channel'];

  public function path()
  {
    return '/threads/' . $this->channel()->name . '/' . $this->id;
  }

  public function channel()
  {
    return $this->belongsTo(Channel::class, 'channel_id');
  }
}
