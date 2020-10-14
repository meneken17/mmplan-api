<?php

use App\DienstObject;
use App\DienstTemplate;
use App\GodiSeries;
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
        $this->call(LocationSeeder::class);
        $this->call(TimeSlotSeeder::class);
        $this->call(PersonSeeder::class);

        $this->call(DienstTemplateSeeder::class);
        $this->call(GodiTemplateSeeder::class);
        $this->call(GodiSeriesSeeder::class);

        $this->call(GodiObjectSeeder::class);
        $this->call(DienstObjectSeeder::class);

        $this->call(TimeFrameSeeder::class);
    }
}
