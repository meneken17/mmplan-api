<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GodiSeries extends Model
{
    protected $fillable = ['internal', 'display','godi_template_id','rrule'];

    public function godi_template(){
        return $this->hasOne('App\GodiTemplate');
    }
}
