<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory()->create([
            'login' => 'darkcheos',
            'email' => 'ericdellisse@gmail.com',
            'use_firstname' => 'dark',
            'use_lastname' => 'cheos',
            'use_avatar' => '/storage/avatars/imagecheos.jpg',
            'password' => '$2y$10$K.C3PGtsYqtPKHCcCAFARuzT3sVx2.V/OLf26NdP/v1kzxedVTluG',
            'use_role_id' => 9,
        ]);

        \App\Models\User::factory(10)->create();
        \App\Models\Event::factory()->create([
            'eve_titre' => 'chasse au trésor',
            'eve_contenu' => '80',
            'eve_date_event' => '2023-02-14 23:38:20',
            'eve_fin_event' => '2023-05-14 23:38:20',
        ]);

        \App\Models\Event::factory()->create([
            'eve_titre' => 'mariage',
            'eve_contenu' => 'mariage de serena et de son hamburger',
            'eve_ime_id' => '2',
            'eve_date_event' => '2023-05-14 21:38:20',
            'eve_fin_event' => '2023-05-14 23:38:20',
        ]);

        \App\Models\Role::factory()->create([
            'rol_nom' => 'Demande',
            'rol_description' => 'Demande',
        ]);

        \App\Models\Role::factory()->create([
            'rol_nom' => 'Recrue',
            'rol_description' => 'Recrue',
        ]);

        \App\Models\Role::factory()->create([
            'rol_nom' => 'Feu follet',
            'rol_description' => 'Feu follet',
        ]);

        \App\Models\Role::factory()->create([
            'rol_nom' => 'Cerbere',
            'rol_description' => 'Cerbere',
        ]);

        \App\Models\Role::factory()->create([
            'rol_nom' => 'Demon',
            'rol_description' => 'Demon',
        ]);

        \App\Models\Role::factory()->create([
            'rol_nom' => 'Archidemon',
            'rol_description' => 'Archidemon',
        ]);

        \App\Models\Role::factory()->create([
            'rol_nom' => 'Darksider',
            'rol_description' => 'Darksider',
        ]);

        \App\Models\Role::factory()->create([
            'rol_nom' => 'Succube',
            'rol_description' => 'Succube',
        ]);

        \App\Models\Role::factory()->create([
            'rol_nom' => 'Roi écarlate',
            'rol_description' => 'Roi écarlate',
        ]);

        \App\Models\Image_event::factory()->create([
            'ime_nom' => 'default',
            'ime_lien' => '/storage/events/ie9yzPWPiNVaZecpAaFODyYLxw.jpg',
        ]);

        \App\Models\Image_event::factory()->create([
            'ime_nom' => 'mariage',
            'ime_lien' => '/storage/events/image_6515415_20210418_ob_d979ec_lien-eternel.jpg',
        ]);

        \App\Models\Parametre::factory()->create([
            'par_name' => 'Bienvenue',
            'par_contenue' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro similique sequi nesciunt beatae, ab et vitae sint vel voluptates voluptatum quis quidem possimus.

            Fugit ratione obcaecati quia, exercitationem amet alias sequi excepturi saepe temporibus laudantium, velit aspernatur dignissimos modi voluptatem officia non, aliquid perferendis error soluta quam ab ipsa! Tempora similique dolorum ab pariatur hic aperiam, eligendi quo facilis porro. Quisquam dicta autem architecto, deserunt nisi obcaecati iste a ab voluptate voluptatem dolorem facilis quia adipisci eius impedit animi eveniet eaque libero explicabo accusamus ad repellat rerum consectetur. Libero odio ducimus aliquid ab consequuntur beatae officiis nostrum repellat atque temporibus asperiores a veritatis distinctio tenetur, excepturi possimus quaerat necessitatibus quod, esse ratione fugit consequatur, assumenda voluptatum vel? Repellendus incidunt rerum numquam voluptatem consectetur, ratione nulla soluta minus animi doloribus neque delectus deleniti voluptate fugiat error iure. Nemo ab repellendus laudantium adipisci accusamus, maiores ullam neque quod consequatur nostrum similique ducimus quibusdam quos, id sit suscipit delectus ipsa ipsam? In ut asperiores voluptates tenetur similique odit ad laboriosam. Fuga optio corporis adipisci voluptatem cum. Quo soluta eaque rerum et quidem labore atque error, accusantium dolor sed voluptatum consequatur eius iusto ducimus? Id mollitia inventore officia ad soluta numquam vero eaque ex!',
        ]);

        \App\Models\Parametre::factory()->create([
            'par_name' => 'Actualité ou autre',
            'par_contenue' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis maxime est ducimus in nostrum minima, laudantium quo natus alias qui nam magni perferendis facere cumque vitae itaque neque soluta! Soluta?',
        ]);


        \App\Models\Categorie::factory(10)->create();
        \App\Models\Aide::factory(100)->create();
    }
}
