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
        DB::table('debtors')->insert([
            ['id' => 1, 'name' => 'Fabio', ],
            ['id' => 2, 'name' => 'Antonio'],
            ['id' => 3, 'name' => 'Vito'],
            ['id' => 4, 'name' => 'Massimo'],
            ['id' => 5, 'name' => 'Karim'],
        ]);

        DB::table('bills')->insert([
            ['id' => 1, 'name' => 'Luce', 'price' => 120.10, 'period' => 'Agosto', 'notes' => 'Non si paga' ],
            ['id' => 2, 'name' => 'Gas','price' => 12.10, 'period' => 'Settembre'],
        ]);

        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Luce', 'price' => 120.10, 'period' => 'Agosto', 'notes' => 'Non si paga' ],
            ['id' => 2, 'name' => 'Gas','price' => 12.10, 'period' => 'Settembre'],
        ]);


    }
}
