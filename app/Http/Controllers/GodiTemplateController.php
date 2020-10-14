<?php

namespace App\Http\Controllers;

use App\GodiTemplate;
use App\Location;
use Illuminate\Http\Request;

class GodiTemplateController extends ModelController
{
    public function getModel()
    {
        return GodiTemplate::class;
    }
}
