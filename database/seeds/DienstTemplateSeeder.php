<?php

use App\DienstTemplate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DienstTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DienstTemplate::truncate();
        Schema::enableForeignKeyConstraints();

        DienstTemplate::create([
            'display' => 'Leuchter',
            'internal' => 'leuchter',
            'size' => 2,
            'sort' => -20
        ]);

        DienstTemplate::create([
            'display' => 'Altar',
            'internal' => 'altar',
            'size' => 2,
            'sort' => -10
        ]);

        DienstTemplate::create([
            'display' => 'Kollekte',
            'internal' => 'kollekte2',
            'size' => 2,
            'sort' => 0
        ]);

        DienstTemplate::create([
            'display' => 'Kollekte',
            'internal' => 'kollekte3',
            'size' => 3,
            'sort' => 0,
        ]);

        DienstTemplate::create([
            'display' => 'Weihrauch',
            'internal' => 'weihrauch',
            'size' => 2,
            'sort' => -40
        ]);

        DienstTemplate::create([
            'display' => 'Kreuz',
            'internal' => 'kreuz',
            'size' => 1,
            'sort' => -30
        ]);
    }
}
