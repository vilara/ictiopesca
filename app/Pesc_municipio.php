<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesc_municipio extends Model
{
    public function pesc_localidade()
    {
        return $this->hasMany('App\Pesc_localidade','municipio_id','id');
    }
}
