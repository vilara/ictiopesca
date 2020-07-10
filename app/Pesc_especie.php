<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesc_especie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cat', 'cat_trof',
    ];
    
    
    protected $table = 'pesc_especies';
    
    protected $primaryKey = 'id';
    
    
  
}
