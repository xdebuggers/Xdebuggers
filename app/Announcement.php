<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'subject', 'content'
    ];
    public function user() {
        return $this->belongsTo('App\User');
    }
}
