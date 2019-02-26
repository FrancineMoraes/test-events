<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'title' => 'Evento sem SeatsIO com nome grande para testar a quantidade',
            'description' => 'Em 2014 os dois gigantes, Raça Negra e Só Pra Contrariar se encontram para presentear o público com as canções e o samba inovador que marcou gerações e inspirou um número incalculável de fãs que se renova de forma automática, é impressionante a quantidade de crianças e adolescentes conhecedores do repertório das bandas. A ideia surgiu dos líderes das duas bandas, Alexandre Pires e o Luiz Carlos, que alguns anos idealizaram o projeto, mas devido agenda não foi possível concretizar. Entretanto, o momento chegou com nome que faz jus à suas respectivas histórias, "Gigantes do Samba", apresenta Raça Negra e Só Pra Contrariar dividindo o mesmo palco, para deleite do público. Mais um sucesso carimbado que ganhou o Brasil com uma turnê que percorreu todo o território nacional.',
            'first_apresentation' => '2017-12-25 23:30:30',
            'last_apresentation' => '2018-12-20 23:30:30'
        ]);

        DB::table('images')->insert([
            'image_box' => 'https://eventicket.s3-sa-east-1.amazonaws.com/imgs/3830-small-racanegra.jpg',
            'image_layer' => 'https://eventicket.s3-sa-east-1.amazonaws.com/imgs/3831-slide-racanegra.jpg',
            'image_layer_mobile' => 'https://eventicket.s3-sa-east-1.amazonaws.com/imgs/3907-4378-card-porta-web-app-510x310-atom-1.jpg',
            'events_id' => 1
        ]);

        DB::table('addresses')->insert([
            'street' => 'Rua Gonçalves Chaves',
            'number' => '602',
            'district' => 'Centro',
            'complement' => 'Evento na rua',
            'localization' => 'Evento na rua',
            'events_id' => 1
        ]);

        DB::table('session')->insert([
            'name' => 'Sala 1',
            'people_quantity' => 50,
            'started' => '2017-12-25 23:30:30',
            'finished' => '2017-12-26 01:30:30'
        ]);

        DB::table('session_has_events')->insert([
            'session_id' => 1,
            'events_id' => 1,
        ]);
    }
}
