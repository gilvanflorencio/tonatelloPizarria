<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            'nome' => 'Á Moda do Cliente',
            'ingredientes' => 'ESCOLHA ATÉ 5 RECHEIOS',
            'valor' => '50.00',
            'foto' => null
        ]); 


        DB::table('pizzas')->insert([
            'nome' => 'Aliche',
            'ingredientes' => 'FILÉ DE ALICHE, MUSSARELA E MOLHO DE TOMATE',
            'valor' => '38.00',
            'foto' => null
        ]); 
    }
}
