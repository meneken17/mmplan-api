<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends ModelController
{
    public function getModel()
    {
        return Group::class;
    }
}
