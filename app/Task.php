<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //a que tabla hace referencia esté modelo
    // si no se lleva acabo la convensió y hace referencia a otra tabla esta se debe de especificar utilizando una variable tipo protected
    // $protected $table= 'nombreTabla';
    protected $filable = ['name', 'description', 'user_id'];

    public function user(){
      $this->belongsTo('App\user');
    }

}
