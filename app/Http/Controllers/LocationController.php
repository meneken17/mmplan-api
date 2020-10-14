<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends ModelController
{
    public function getModel()
    {
        return Location::class;
    }
}
