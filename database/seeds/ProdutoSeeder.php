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
            'ingredientes' => 'BACON, MUSSARELA',
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

         DB::table('produto')->insert([
            'nome' => 'CATUPIRY',
            'ingredientes' => 'CATUPIRY E TOMATE',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'CAMARÃO',
            'ingredientes' => 'CAMARÃO REFOGADO, CEBOLA, MUSSARELA OU CATUPIRY',
            'valor' => '48.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'CARIJÓ',
            'ingredientes' => 'FRANGO, BACON, ERVILHA,OVO, CEOLA E CATUPIRY ORIGINAL',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'CARIOCA',
            'ingredientes' => 'CALABRESA PICADA E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'CINCO QUEIJOS',
            'ingredientes' => 'MUSSARELA, CATUPIRY ORIGINAL,PROVOLONE, PARMESÃO E GORGONZOLA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'CHAMPIGNON',
            'ingredientes' => 'CHAMPIGNON, BACON, CEBOLA, MUSSARELA OU CATUPIRY ORIGINAL',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'CHILENA',
            'ingredientes' => 'CALABRESA, CEBOLA, PALMITO E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'DOIS QUEIJOS',
            'ingredientes' => '	MUSSARELA E CATUPIRY ORIGINAL',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'DELICIOSA',
            'ingredientes' => 'MUSSARELA, CALABRESA, PALMITO, BACON,TOMATE E CEBOLA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'DIPLOMATA',
            'ingredientes' => 'PEITO DE PERU FATIADO, MUSSARELA E CEBOLA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'ESCAROLA I',
            'ingredientes' => 'ESCAROLA REFOGADA, CEBOLA E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'ESCAROLA II',
            'ingredientes' => 'ESCAROLA REFOGADA, BACON E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'FRANCESA',
            'ingredientes' => 'PRESUNTO, BACON, PALMITO, CHAMPIGNON,CATUPIRY ORIGINAL E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'FRANGO CAIPIRA',
            'ingredientes' => 'FRANGO DESFIADO,MILHO, OVO E CATUPIRY ORIGINAL',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'FRANGO CHEDDAR',
            'ingredientes' => 'FRANGO DESFIADO COM COBERTURA DE CHEDDAR',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'FRANGO CATUPIRY',
            'ingredientes' => 'FRANGO DESFIADO COM COBERTURA DE CATUPIRY ORIGINAL',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'FRANGO MUSSARELA',
            'ingredientes' => 'FRANGO DESFIADO COM COBERTURA DE MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'FRANGO ESPECIAL',
            'ingredientes' => 'FRANGO DESF., MILHO, BACON, CAT.ORIGINAL E BATATA PALHA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'GREGA',
            'ingredientes' => 'LOMBO,PALMITO, TOMATE, BACON, CEBOLA E CATUPIRY ORIGINAL',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'ITALIANA',
            'ingredientes' => 'LOMBO, BACON E CATUPIRY ORIGINAL',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);
        
         DB::table('produto')->insert([
            'nome' => 'JARDINEIRA',
            'ingredientes' => 'ESCAROLA,PALMITO, ERVILHA,MILHO, CEBOLA E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'LOMBO I',
            'ingredientes' => 'LOMBO CANADENSE E CEBOLA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'LOMBO II',
            'ingredientes' => 'LOMBO CANADENSE,CHAMPIGNON E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'LOMBO III',
            'ingredientes' => 'LOMBO CANADENSE,CHAMPIGNON E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'LOMBO IIII',
            'ingredientes' => 'LOMBO CANADENSE,BACON,CHAMPIGNON, MUSS OU CATUPIRY ORIGINAL',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'LITUANA',
            'ingredientes' => 'PRESUNTO,PALMITO,BACON, CATUPIRY ORIGINAL E CEBOLA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'MUSSARELA I',
            'ingredientes' => 'MUSSARELA E MOLHO DE TOMATE',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'MUSSARELA II',
            'ingredientes' => 'MUSSARELA, MOLHO DE TOMATE E RODELAS DE TOMATE',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'MARAVILHA',
            'ingredientes' => 'CALABRESA MOÍDA, BACON, ERVILHA, CEBOLA, MUSSARELA, PALMITO E ALHO FRITO',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'MARGUERITA',
            'ingredientes' => 'MUSSARELA, MOLHO DE TOMATE, PARMESAO, MANJERICÃO E TOMATE',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'MILHO VERDE',
            'ingredientes' => 'MILHO VERDE E CATUPIRY ORIGINAL',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'MIRELA',
            'ingredientes' => 'MILHO VERDE E CATUPIRY ORIGINAL',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'MEXICANA',
            'ingredientes' => 'FRANGO, MILHO, BACON, CEBOLA E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'NAMORADA',
            'ingredientes' => 'PRESUNTO, PALMITO, CATUPIRY ORIGINAL E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'NAPOLITANA',
            'ingredientes' => 'MUSSARELA, PARMESÃO E RODELAS DE TOMATE',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'NORDESTINA',
            'ingredientes' => 'MUSSARELA E MOLHO DE TOMATE',
            'valor' => '48.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'PAULISTANA',
            'ingredientes' => 'CALABRESA PICADA, CATUPIRY ORIGINAL, OVO, CEBOLA E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'PERUANA',
            'ingredientes' => 'PEITO DE PERU FATIADO, ERVILHA E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'PIZZAIOLO',
            'ingredientes' => 'LOMBO, OVO, BACON, MUSSARELA, TOMATE E CEBOLA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'PEPERONE I',
            'ingredientes' => 'PEPERONE E MUSSARELA',
            'valor' => '40.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'PEPERONE II',
            'ingredientes' => 'PEPERONE, BACON, PIMENTÃO E MUSSARELA',
            'valor' => '40.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'PORTUGUESA I',
            'ingredientes' => 'PRESUNTO, OVO, ERVILHA, CEBOLA E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'PORTUGUESA II',
            'ingredientes' => 'PRESUNTO, OVO, ERVILHA, PALMITO E CEBOLA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'PORTUGUESA III',
            'ingredientes' => 'PRESUNTO, OVO, ERVILHA, PALMITO,CEBOLA E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'PORTUGUESA ESPECIAL',
            'ingredientes' => 'PRESUNTO, OVO, ERVILHA,BACON, CALABRESA, CEBOLA E MUSSARELA',
            'valor' => '45.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => '	PALMITO',
            'ingredientes' => 'PALMITO E MUSSARELA',
            'valor' => '45.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'QUATRO QUEIJO',
            'ingredientes' => 'MUSSARELA, CATUPIRY ORIGINAL, PROVOLONE E PARMESÃO',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'RÚCULA I',
            'ingredientes' => 'MUSSARELA, RÚCULA E TOMATE SECO',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'RÚCULA II',
            'ingredientes' => 'MUSSARELA DE BÚFALO, RÚCULA E TOMATE SECO',
            'valor' => '45.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'ROMANA',
            'ingredientes' => 'ALICHE, PARMESÃO, TOMATE E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'SICILIANA',
            'ingredientes' => 'CALABRESA, BACON, CHAMPIGNON E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'TONATELLO',
            'ingredientes' => 'FRANGO, BACON, CHAMPIGNON, CATUPIRY ORIGINAL E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'TURELA',
            'ingredientes' => 'MUSSARELA DE BÚFALO E TOMATE SECO',
            'valor' => '45.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'TRÊS QUEIJOS',
            'ingredientes' => 'MUSSARELA, CATUPIRY ORIGINAL E PARMESÃO',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'TRADIÇÃO',
            'ingredientes' => 'CALABRESA FATIADA, CEBOLA E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'TOSCANA',
            'ingredientes' => 'CALABRESA MOÍDA,PALMITO E CATUPIRY ORIGINAL',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'TROPICAL',
            'ingredientes' => 'ATUM, ALICHE, PARMESÃO E CEBOLA',
            'valor' => '45.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'VEGETARIANA',
            'ingredientes' => 'ESCAROLA,PALMITO, ERVILHA, MILHO, OVO E CEBOLA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'NOVA ERA',
            'ingredientes' => 'BACON, PALMITO, CHAMPIGNON E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'VENEZA',
            'ingredientes' => 'PRESUNTO, MILHO, CATUPIRY ORIGINAL E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'SALAME	',
            'ingredientes' => '	SALAME, CEBOLA E MUSSARELA',
            'valor' => '38.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'BANANA',
            'ingredientes' => 'BANANA, LEITE CONDENSADO E CANELA',
            'valor' => '40.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'BRIGADEIRO',
            'ingredientes' => 'CHOCOLATE E CHOCOLATE GRANULADO',
            'valor' => '40.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'ROMEU E JULIETA',
            'ingredientes' => 'MUSSARELA E GOIABADA',
            'valor' => '40.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'CHOCONANA',
            'ingredientes' => 'CHOCOLATE E BANANA',
            'valor' => '40.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'MORANGO',
            'ingredientes' => 'CHOCOLATE AO LEITE E MORANGO',
            'valor' => '40.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'PRESTÍGIO',
            'ingredientes' => 'CHOCOLATE, COCO E LEITE CONDENSADO',
            'valor' => '40.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);

         DB::table('produto')->insert([
            'nome' => 'NUTELA',
            'ingredientes' => 'NUTELLA COM MORANGO',
            'valor' => '45.00',
            'foto' => '/file/img/pizzaForno.jpeg',
            'categoria_id' => 1
         ]);




         //FIM PIZZAS

  }
}
