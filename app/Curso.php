<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    //Relación one to one
    /*
    public function listas(){
        return $this->hasMany('App\Lista');
    }*/
}
