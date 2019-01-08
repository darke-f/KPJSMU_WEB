<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
      //table name
      protected $table = 'review';
      //Primary key
      public $primaryKey = 'id';
      //timestamp
      public $timestamp = true;
  	  
      public function user(){
          return $this->belongsTo('App\User');
      }
  
}
