<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesc_localidade extends Model
{
    
    
    public function pesc_municipio()
    {
        return $this->belongsTo('App\Pesc_municipio','municipio_id');
    }
}
