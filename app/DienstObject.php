<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DienstObject extends Model
{
    protected $fillable = ['internal', 'display', 'object_godi_id', 'size', 'pos'];
    protected $with = 'assignments';

    public function godi_object()
    {
        return $this->belongsTo('App\GodiObject');
    }

    public function assignments()
    {
        return $this->belongsToMany('App\Person', 'assignments');
    }
}
