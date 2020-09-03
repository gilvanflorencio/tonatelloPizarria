<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "Produto";
    //protected $primaryKey = "produto_id";
    public $timestamps = false;

    public function categoria(){
        return $this->belongsTo("App\Model\Categoria");
    }
}


