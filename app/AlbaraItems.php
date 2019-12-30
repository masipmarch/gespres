<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbaraItems extends Model
{
    //
    protected $table = 'detallalbara';
    public $timestamps = false;

    public function albara()
    {
        return $this->belongsTo('App\Albara');
    }
}