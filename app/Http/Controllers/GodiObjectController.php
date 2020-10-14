<?php

namespace App\Http\Controllers;

use App\GodiObject;
use Illuminate\Http\Request;

class GodiObjectController extends ModelController
{
    public function getModel()
    {
        return GodiObject::class;
    }
}
