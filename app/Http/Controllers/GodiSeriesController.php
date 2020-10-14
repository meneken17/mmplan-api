<?php

namespace App\Http\Controllers;

use App\GodiSeries;
use Illuminate\Http\Request;

class GodiSeriesController extends ModelController
{
    public function getModel()
    {
        return GodiSeries::class;
    }
}
