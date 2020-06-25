<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'discription'
    ];

    public function cv() {
        return $this->BelongsTo('App\CV');
    }
}
