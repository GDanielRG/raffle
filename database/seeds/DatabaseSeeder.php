<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PrizeTableSeeder::class);
        $this->call(ConcursantTableSeeder::class);
        $this->call(RafflesTableSeeder::class);
    }
}
