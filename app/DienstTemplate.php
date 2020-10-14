<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DienstTemplate extends Model
{
    protected $fillable = ['internal', 'display', 'size','sort'];
    protected $hidden = ['pivot'];

    public function godi_templates()
    {
        return $this->belongsToMany('App\GodiTemplate', 'template_parts');
    }
}
