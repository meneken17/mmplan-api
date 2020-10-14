<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeFrame extends Model
{
    protected $fillable = ['person_id', 'start', 'end', 'blocked'];
}
