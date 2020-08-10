<?php
namespace App\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Pizzas extends Model
{
    protected $table = 'pizzas';

    protected $fillable = ['nome','ingredientes','valor', 'foto'];
}
