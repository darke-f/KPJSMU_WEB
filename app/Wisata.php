<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
     
  ///table name
      protected $table = 'wisata';
      //Primary key
      public $primaryKey = 'id';
      //timestamp
      public $timestamp = true;
  
     // public function user(){
       //   return $this->belongsTo('App\User');
     // }
  
}
