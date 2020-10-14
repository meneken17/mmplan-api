<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['internal', 'display', 'lat', 'lon'];

    public function godi_templates()
    {
        return $this->hasMany('App\GodiTemplate');
    }

    public function godi_objects()
    {
        return $this->hasMany('App\GodiObject');
    }
}
