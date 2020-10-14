<?php

use App\Person;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'name' => 'Daniel Kallendorf',
            'short' => 'D. Kallendorf'
        ]);
        Person::create([
            'name' => 'Celine Schönbener',
            'short' => 'C. Schönberner'
        ]);
        Person::create([
            'name' => 'Philipp Julian Ries',
            'short' => 'P. J. Ries'
        ]);
        Person::create([
            'name' => 'Julian Jeyaseelan',
            'short' => 'J Jeyaseelan'
        ]);
    }
}
