<?php

use App\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Schema::disableForeignKeyConstraints();
        Location::truncate();
        Schema::enableForeignKeyConstraints();

        Location::create([
            'display' => 'St. Michael Münster',
            'internal' => 'stmichael',
            'lat' => 49.927120,
            'lon' => 8.859264
        ]);
        Location::create([
            'display' => 'Friedhofskapelle',
            'internal' => 'friedhof',
            'lat' => 49.921034,
            'lon' => 8.858954
        ]);
    }
}
