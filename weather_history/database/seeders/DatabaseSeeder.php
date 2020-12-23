<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon, Carbon\CarbonPeriod;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $startDate = Carbon::now()->subMonths(6);
        $endDate = Carbon::now();
		$period = CarbonPeriod::create($startDate, '1 day', $endDate);

		foreach ($period as $key => $date) {

	        DB::table('history')->insert([
	            'temp' => mt_rand(0,30) + mt_rand(0,10)/10,
	            'date_at' => $date->format('Y-m-d'),
	        ]);

		}

    }
}
