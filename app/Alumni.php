<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $guarded=[];

    public function apprenant(){
        return $this->belongsTo('App\Apprenants');
    }
}

