<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['internal', 'display', 'group_id'];
    protected $hidden = ['pivot'];

    public function time_frames()
    {
        return $this->hasMany('App\TimeFrame');
    }

    public function dienst_objects()
    {
        $this->belongsToMany('App\DienstObject','assignments');
    }
}
