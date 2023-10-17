<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

   /* public function usuario(){
    return $this->belongsTo('App\User',user_id);
}

    public function listas(){
        return $this->hasMany('App\Lista');
    }
   */
}
