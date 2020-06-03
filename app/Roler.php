<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roler extends Model
{
    /**
     * The users that belong to the roler.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    
    public function permission()
    {
        return $this->belongsToMany('App\Permission', 'permission_roler', 'roler_id', 'permission_id');
    }
}
