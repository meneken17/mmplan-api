<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GodiObject extends Model
{
    protected $fillable = ['internal', 'display', 'location_id', 'date', 'duration'];
    protected $hidden = ['location_id'];
    protected $with = ['location','dienst_objects'];

    public function location()
    {
        return $this->belongsTo('App\Location');
    }
    
    public function dienst_objects()
    {
        return $this->hasMany('App\DienstObject');
    }
}
