<?php

use App\TimeSlot;
use Illuminate\Database\Seeder;

class TimeSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            TimeSlot::create(['start'=>'14:00','end'=>'16:00','day'=>$i]);
            TimeSlot::create(['start'=>'16:00','end'=>'17:00','day'=>$i]);
            TimeSlot::create(['start'=>'17:00','end'=>'18:00','day'=>$i]);
            TimeSlot::create(['start'=>'18:00','end'=>'19:00','day'=>$i]);
            TimeSlot::create(['start'=>'19:00','end'=>'20:00','day'=>$i]);
        }

        for ($i=5; $i < 7; $i++) { 
            TimeSlot::create(['start'=>'8:00','end'=>'12:00','day'=>$i]);
            TimeSlot::create(['start'=>'12:00','end'=>'16:00','day'=>$i]);
            TimeSlot::create(['start'=>'17:00','end'=>'18:00','day'=>$i]);
            TimeSlot::create(['start'=>'16:00','end'=>'20:00','day'=>$i]);
        }
    }
}
