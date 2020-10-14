<?php

namespace App\Http\Controllers;

use App\DienstTemplate;
use Illuminate\Http\Request;

class DienstTemplateController extends ModelController
{
    function getModel()
    {
        return DienstTemplate::class;
    }
}
