<?php
/**
 * Created by PhpStorm.
 * User: ruslanibragimov
 * Date: 11/07/2018
 * Time: 14:37
 */

namespace App;


class Replyer
{
  public function replies() {
      return $this->morphMany(Reply::class, 'subject');
  }

  public function reply($body)
  {
    $attributes = ['user_id' => auth()->id(), 'body' => $body];
    $this->replies()->create($attributes);
  }
}