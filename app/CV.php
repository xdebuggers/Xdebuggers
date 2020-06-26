<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    protected $table = 'c_v_s';

    protected $fillable = [
        'lead', 'description'
    ];

    public function skills() {
        return $this->hasMany('App\Skill', 'c_v_s_id');
    }
    public function events() {
        return $this->hasMany('App\Event', 'c_v_s_id');
    }
}
