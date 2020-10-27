<?php

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
        DB::table('Debtors')->insert([
            ['id' => 1, 'name' => 'Fabio', ],
            ['id' => 2, 'name' => 'Antonio'],
            ['id' => 3, 'name' => 'Vito'],
            ['id' => 4, 'name' => 'Massimo'],
            ['id' => 5, 'name' => 'Karim'],
        ]);
    }
}
