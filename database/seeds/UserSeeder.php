<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        DB::table('users')->insert([
            'name'=>'Ataúlfo',
            'email'=>"ataulfo@dh.com",
            'password'=>Hash::make('123456')
        ]);
    }
}
