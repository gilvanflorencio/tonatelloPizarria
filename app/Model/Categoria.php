<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categoria";
    //protected $primaryKey = "categoria_id";
    public $timestamps = false;

public function produto(){
    $this->hasMany("App\Model\Produto");
}
}
