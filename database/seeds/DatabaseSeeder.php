<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * 
     */
    public function run()
    {
        // $this->call(CategoriaSeeder::class);
        // $this->call(ProdutoSeeder::class);
       // $this->call(FogazzasSeeder::class);
       //  $this->call(EsfihasSeeder::class);
       $this->call(UserSeeder::class);
    }
}
