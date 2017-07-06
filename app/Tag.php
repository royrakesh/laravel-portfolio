<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    public function Portfolio()
    {
        return $this->belongsToMany('App\Portfolio');
    }
}
