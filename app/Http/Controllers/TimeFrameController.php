<?php

namespace App\Http\Controllers;

use App\TimeFrame;
use Illuminate\Http\Request;

class TimeFrameController extends ModelController
{
    public function getModel()
    {
        return TimeFrame::class;
    }
}
