<?php

use App\Person;
use App\TimeFrame;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TimeFrameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        TimeFrame::truncate();
        Schema::enableForeignKeyConstraints();

        $p1 = Person::firstWhere('name', 'Daniel Kallendorf');
        $p1->time_frames()->save(
            new TimeFrame([
                'start' => date('2020-08-21 00:00'),
                'end' => date('2020-08-30 17:00'),
                'blocked' => true
            ])
        );
    }
}
