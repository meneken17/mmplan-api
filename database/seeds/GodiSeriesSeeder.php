<?php

use App\GodiSeries;
use App\GodiTemplate;
use Illuminate\Database\Seeder;

class GodiSeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GodiTemplate::firstWhere('internal', 'sonntags')->godi_series()->save(new GodiSeries([
            'internal' => 'sonntags',
            'display' => 'Sonntags Hochamt',
            'rrule' => "DTSTART:20200830T100000Z\n" .
                "RRULE:FREQ=WEEKLY;INTERVAL=1;WKST=MO;BYDAY=SU"
        ]));
    }
}
