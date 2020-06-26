<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'description'
    ];

    public function cv() {
        return $this->BelongsTo('App\CV');
    }
}
