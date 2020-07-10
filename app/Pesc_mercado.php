<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesc_mercado extends Model
{
    
    public function pesc_especie()
    {
        return $this->belongsTo('App\Pesc_especie','cat');
    }
    
    public function pesc_localidade()
    {
        return $this->belongsTo('App\Pesc_localidade','loc');
    }
    
    
    protected $table = 'pesc_col_mercado';
}