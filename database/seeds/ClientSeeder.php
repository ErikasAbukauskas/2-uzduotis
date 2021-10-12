<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB
use App\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Client::class, 50)->create();
        // DB::table("clients")->insert([
        //     'name' => 'Vardenis',
        //     'surname' => 'Pavardenis',
        //     'username' => 'Slapyvardis',
        //     'company_id' => rand(1,10),
        //     'image_url' => 'Nuoroda'
        // ]);

        // DB::table("clients")->insert([
        //     'name' => 'Vardenis',
        //     'surname' => 'Pavardenis',
        //     'username' => 'Slapyvardis',
        //     'company_id' => rand(1,10),
        //     'image_url' => 'Nuoroda'
        // ]);

        // DB::table("clients")->insert([
        //     'name' => 'Vardenis',
        //     'surname' => 'Pavardenis',
        //     'username' => 'Slapyvardis',
        //     'company_id' => rand(1,10),
        //     'image_url' => 'Nuoroda'
        // ]);

        // DB::table("clients")->insert([
        //     'name' => 'Vardenis',
        //     'surname' => 'Pavardenis',
        //     'username' => 'Slapyvardis',
        //     'company_id' => rand(1,10),
        //     'image_url' => 'Nuoroda'
        // ]);

        // DB::table("clients")->insert([
        //     'name' => 'Vardenis',
        //     'surname' => 'Pavardenis',
        //     'username' => 'Slapyvardis',
        //     'company_id' => rand(1,10),
        //     'image_url' => 'Nuoroda'
        // ]);

        // DB::table("clients")->insert([
        //     'name' => 'Vardenis',
        //     'surname' => 'Pavardenis',
        //     'username' => 'Slapyvardis',
        //     'company_id' => rand(1,10),
        //     'image_url' => 'Nuoroda'
        // ]);

        // DB::table("clients")->insert([
        //     'name' => 'Vardenis',
        //     'surname' => 'Pavardenis',
        //     'username' => 'Slapyvardis',
        //     'company_id' => rand(1,10),
        //     'image_url' => 'Nuoroda'
        // ]);
    }
}
