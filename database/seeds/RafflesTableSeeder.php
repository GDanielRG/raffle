<?php

use Illuminate\Database\Seeder;
use App\Raffle;
use Carbon\Carbon;

class RafflesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Raffle::create([
            'batch' => 1,
            'date' => Carbon::now()->addMinutes(90),
        ]);
        Raffle::create([
            'batch' => 2,
            'date' => Carbon::now()->addMinutes(120),
        ]);
        Raffle::create([
            'batch' => 3,
            'date' => Carbon::now()->addMinutes(150),
        ]);
        Raffle::create([
            'batch' => 4,
            'date' => Carbon::now()->addMinutes(180),
        ]);
    }
}
