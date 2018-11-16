<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    //
    public function type()
    {
        return $this->belongsTo('App\Type', 'type_id');
    }
}
