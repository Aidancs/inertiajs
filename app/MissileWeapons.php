<?php

namespace App;

use App\Unit;
use Illuminate\Database\Eloquent\Model;

class MissileWeapons extends Model
{
    protected $table = 'missile_weapons';

    protected $fillable = [
        'name', 'range', 'attacks', 'to_hit', 'to_wound', 'rend', 'damage'
    ];

    public function units()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}
