<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class, 50)->create();

        // DB::table("companies")->insert([
        //     'name' => 'Pavadinimas',
        //     'type' => 'Tipas',
        //     'description' => 'Aprasymas',

        // ]);

        // DB::table("companies")->insert([
        //     'name' => 'Pavadinimas',
        //     'type' => 'Tipas',
        //     'description' => 'Aprasymas',

        // ]);

        // DB::table("companies")->insert([
        //     'name' => 'Pavadinimas',
        //     'type' => 'Tipas',
        //     'description' => 'Aprasymas',

        // ]);


    }
}
