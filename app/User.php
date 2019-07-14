<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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


    public function roles()
    {
        return $this
        ->belongsToMany('App\Role')
        ->withTimeStamps();
    }

    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401,'This action is unauthorized');
    }

    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        }else{
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role){
        if ($this->roles()->where('name',$role)->first()) {
            return true;
        }
        return false;
    }

    public function generateCode()
    {
        $number = '';
            for ($i=0; $i < 13 ; $i++) { 
                $token = rand(1,9);
                $number .= $token;
            }
            
            
            if ($this->hasRole('ROLE_SUPERADMIN') == true) {
                $id = 'SA-'.$number;
            }elseif ($this->hasRole('ROLE_ADMIN') == true) {
                $id = 'AD-'.$number;
            }elseif ($this->hasRole('ROLE_PEDAGANG') == true) {
                $id = 'ME-'.$number;
            }elseif ($this->hasRole('ROLE_PEMBELI') == true) {
                $id = 'BU-'.$number;
            }

            return $id;
        
    }

}
