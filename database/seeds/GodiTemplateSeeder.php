<?php

use App\DienstTemplate;
use App\GodiTemplate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GodiTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        GodiTemplate::truncate();
        DB::table('template_parts')->truncate();
        Schema::enableForeignKeyConstraints();


        GodiTemplate::create([
            'display' => 'Hochamt',
            'internal' => 'sonntags',
            'location_id' => 1,
            'duration' => 60
        ])->dienst_templates()->saveMany([
            DienstTemplate::firstWhere('internal', 'leuchter'),
            DienstTemplate::firstWhere('internal', 'weihrauch'),
            DienstTemplate::firstWhere('internal', 'kollekte3')
        ]);

        GodiTemplate::create([
            'display' => 'Gräbersegnung',
            'internal' => 'gräber_münster',
            'duration' => 90,
            'location_id' => 2,
        ])->dienst_templates()->save(DienstTemplate::firstWhere('internal', 'leuchter'));
    }
}
