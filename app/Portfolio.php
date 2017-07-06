<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    public function category(){
      
      return $this->belongsTo('App\Category');
    }

    /*
    * Tag that belongs to many Portfolio
    */

    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }
}
