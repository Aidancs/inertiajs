<?php

namespace App;

use App\Unit;
use Illuminate\Database\Eloquent\Model;

class Abilities extends Model
{
    protected $table = 'abilities';

    protected $fillable = [
        'name', 'description', 'roll',
    ];

    public function units()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}
