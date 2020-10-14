<?php

namespace App\Http\Controllers;

use App\TimeSlot;
use Illuminate\Http\Request;

class TimeSlotController extends ModelController
{
    public function getModel()
    {
        return TimeSlot::class;
    }
}
