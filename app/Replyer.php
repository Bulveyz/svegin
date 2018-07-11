<?php
/**
 * Created by PhpStorm.
 * User: ruslanibragimov
 * Date: 11/07/2018
 * Time: 14:37
 */

namespace App;


trait Replyer
{
  public function replies() {
      return $this->morphMany(Reply::class, 'subject');
  }

  public function reply($body)
  {
    $attributes = ['user_id' => 1, 'body' => $body];
    $this->replies()->create($attributes);
  }
}