<?php

namespace App;
use Carbon\Carbon;


class Post extends Model
{
  // protected $fillable = ['published_at'];

  //$guarded จะใส่เพื่มไม่ได้
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

}
