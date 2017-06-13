<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categorias';

    /**
     * 
     */
    public function pratos(){
        return $this->hasMany('App\Models\Pratos');
    }

}
