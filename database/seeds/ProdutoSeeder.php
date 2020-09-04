<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produto')->insert([
           'nome' => 'Á MODA DO CLIENTE',
           'ingredientes' => 'ESCOLHA ATÉ 5 RECHEIOS',
           'valor' => '50.00',
           'foto' => '/file/img/pizzaForno.jpeg',
           'categoria_id' => 1
        ]);

        DB::table('produto')->insert([
            'nome' => 'ALICHE',
            'ingredientes' => 'FILÉ DE ALICHE, MUSSARELA E M',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);


         DB::table('produto')->insert([
            'nome' => 'ALHO',
            'ingredientes' => 'MUSSARELA, ALHO, TOMATE E PARMESÃO',
            'valor' => '40.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);


         DB::table('produto')->insert([
            'nome' => 'ATUM I',
            'ingredientes' => 'ATUM E CEBOLA',
            'valor' => '45.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);


         DB::table('produto')->insert([
            'nome' => 'ATUM II',
            'ingredientes' => 'ATUM, CEBOLA, CATUPIRY ORIGINAL OU MUSSARELA',
            'valor' => '45.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);


         DB::table('produto')->insert([
            'nome' => 'ATUM III',
            'ingredientes' => 'ATUM SÓLIDO EM PEDAÇOS, CEBOLA E MUSSARELA',
            'valor' => '45.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         
         DB::table('produto')->insert([
            'nome' => 'BACON',
            'ingredientes' => 'BACON, MUSSARELA E CEBOLA',
            'valor' => '40.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'BAIANA',
            'ingredientes' => 'CALABRESA MOÍDA, PIMENTA, CEBOLA E OVOS',
            'valor' => '40.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'BAIANA II',
            'ingredientes' => 'CALABRESA MOÍDA, PIMENTA, CEBOLA, OVOS E MUSSARELA',
            'valor' => '40.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'BAIACATU',
            'ingredientes' => 'CALABRESA MOÍDA E CATUPIRY ORIGINAL',
            'valor' => '40.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'BAURU',
            'ingredientes' => 'PRESUNTO, TOMATE E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'BATATA PALHA',
            'ingredientes' => 'PRESUNTO, TOMATE E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'BRASILEIRA',
            'ingredientes' => 'ATUM, CEBOLA, MUSSARELA, ERVILHA E PALMITO',
            'valor' => '45.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'BROCOLIS I',
            'ingredientes' => 'BRÓCOLIS, MUSSARELA OU CATUPIRY ORIGINAL',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'BROCOLIS II',
            'ingredientes' => 'BRÓCOLIS, ALHO, BACON, MUSSARELA OU CATUPIRY ORIGINAL',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'BROCOLIS III',
            'ingredientes' => 'BRÓCOLIS, BACON, PALMITO, ALHO FRITO, MUSS. OU CATUPIRY ORIGINAL',
            'valor' => '45.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'BROCOLIS ESPECIAL',
            'ingredientes' => 'BRÓCOLIS, PEITO DE PERU, BACON, CEBOLA, MUSSARELA DE BÚFALO E CATUPIRY ORIGINAL',
            'valor' => '45.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'CALABRESA',
            'ingredientes' => 'CALABRESA  FATIADA E CEBOLA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);







         //FIM PIZZAS

  }
}
