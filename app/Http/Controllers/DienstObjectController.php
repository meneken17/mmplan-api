<?php

namespace App\Http\Controllers;

use App\DienstObject;

class DienstObjectController extends ModelController
{
    public function getModel()
    {
        return DienstObject::class;
    }
}
