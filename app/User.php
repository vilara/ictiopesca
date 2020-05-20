<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    protected static function boot(){
        parent::boot();
        
        static::created(function ($user){
            $user->profile()->create([
              'perfil' => 'usuario', 
                'instituicao' => '',
            ]);
        });
    }
    
    public function profile(){
       return $this->hasOne('App\Profile');
    }
    
    public function post(){
        return $this->hasOne('App\Post');
    }
    
    public function rolers()
    {
        return $this->belongsToMany('App\Roler');
    }
    
    public function hasPermission(Permission $permission){
        
       return $this->hasAnyRolers($permission->rolers());
       
        
    }
    
    public function hasAnyRolers($rolers){
      
//         if( is_array($rolers) || is_object($rolers)){
//             foreach ($rolers as $roler){
//                 $this->hasAnyRolers($roler);
//             }
//         }
            
           return $this->rolers->contains('name', $rolers);
           
    }
    
}
