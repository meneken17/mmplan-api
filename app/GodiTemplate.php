<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GodiTemplate extends Model
{
    protected $fillable = ['internal', 'display', 'duration'];
    protected $hidden = ['location_id'];
    protected $with = ['location', 'dienst_templates'];

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function dienst_templates()
    {
        return $this->belongsToMany('App\DienstTemplate', 'template_parts')->orderBy('sort');
    }

    public function godi_series()
    {
        return $this->hasMany('App\GodiSeries');
    }
}
