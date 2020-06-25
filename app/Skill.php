<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name', 'percents'
    ];

    public function cv() {
        return $this->BelongsTo('App\CV');
    }
}
