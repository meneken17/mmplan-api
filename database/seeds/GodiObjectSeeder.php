<?php

use App\GodiObject;
use App\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class GodiObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        GodiObject::truncate();
        Schema::enableForeignKeyConstraints();

        (new GodiObject([
            'display' => 'Hochamt',
            'internal' => 'sonntags',
            'duration' => 60,
            'date' => '2020-10-04 10:00:00'
        ]))->location()->associate(Location::firstWhere('internal', 'stmichael'))->save();

        (new GodiObject([
            'display' => 'Gräbersegnung',
            'internal' => 'gräber_münster',
            'duration' => 90,
            'date' => '2020-09-21 10:00:00'
        ]))->location()->associate(Location::firstWhere('internal', 'friedhof'))->save();
    }
}
