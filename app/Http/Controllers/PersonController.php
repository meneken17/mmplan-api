<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends ModelController
{
    public function getModel()
    {
        return Person::class;
    }
}
