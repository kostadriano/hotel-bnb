<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Room extends Model
{
  protected $fillable = [
    'category',
    'hotel_id',
    'reserved',
    'user_id'
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
