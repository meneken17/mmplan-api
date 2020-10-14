<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    protected $fillable = ['start', 'end'];
    public $timestamps = false;

    public function person()
    {
        return $this->belongsTo('App\Person');
    }

}
