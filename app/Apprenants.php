<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprenants extends Model
{
    protected $guarded=[];
    public function alumni(){
        return $this->hasOne('App\Alumni');
    }
}
