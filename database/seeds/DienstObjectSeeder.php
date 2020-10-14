<?php

use App\DienstObject;
use App\GodiObject;
use App\Person;
use Illuminate\Database\Seeder;

class DienstObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d1 = new DienstObject([
            'internal' => 'weihrauch',
            'display' => 'Weihrauch',
            'size' => '2',
            'pos' => '0'
        ]);
        $d2 = new DienstObject([
            'internal' => 'leuchter',
            'display' => 'Leuchter',
            'size' => '2',
            'pos' => '1',
        ]);
        $d3 = new DienstObject([
            'internal' => 'kollekte3',
            'display' => 'Kollekte',
            'size' => '2',
            'pos' => '2'
        ]);

        GodiObject::firstWhere('internal', 'sonntags')->dienst_objects()->saveMany([$d1, $d2, $d3]);

        $d1->assignments()->sync([1, 2]);
        $d2->assignments()->sync([3, 4]);

        $d4 = new DienstObject([
            'internal' => 'leuchter',
            'display' => 'Leuchter',
            'size' => '2',
            'pos' => '0'
        ]);

        GodiObject::firstWhere('internal', 'gräber_münster')->dienst_objects()->saveMany([$d4]);
        $d4->assignments()->sync([1, 2]);
    }
}
