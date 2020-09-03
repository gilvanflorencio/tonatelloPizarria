<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'nome' => 'pizza'
        ]);

        DB::table('categoria')->insert([
            'nome' => 'esfiha'
        ]);

        DB::table('categoria')->insert([
            'nome' => 'fogazza'
        ]);

        DB::table('categoria')->insert([
            'nome' => 'lanche'
        ]);

        DB::table('categoria')->insert([
            'nome' => 'bebidas'
        ]);

        DB::table('categoria')->insert([
            'nome' => 'batata recheada'
        ]);

        DB::table('categoria')->insert([
            'nome' => 'porções'
        ]);
    }
}


