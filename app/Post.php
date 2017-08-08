<?php

namespace App;
use Carbon\Carbon;


class Post extends Model
{
  protected $fillable = ['published_at'];
   protected $guarded = [];
  //$guarded จะใส่เพื่มไม่ได้

}
