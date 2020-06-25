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
        'firstname','lastname','birthday','phone', 'email', 'password','role_id'
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

    public function announcements() {
        return $this->hasMany('App\Announcement');
    }

    public function messages() {
        return $this->hasMany('App\Message');
    }

    public function role() {
        return $this->hasOne('App\Role');
    }

    public function getRole() {
        if ($this->role_id == 1){
            return 'admin';
        } else if ($this->role_id == 2){
            return 'member';
        } else {
            return 'guest';
        }
    }

}
