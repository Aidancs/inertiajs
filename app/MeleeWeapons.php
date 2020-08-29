<?php

namespace App;

use App\Unit;
use Illuminate\Database\Eloquent\Model;

class MeleeWeapons extends Model
{
    protected $table = 'melee_weapons';

    protected $fillable = [
        'name', 'range', 'attacks', 'to_hit', 'to_wound', 'rend', 'damage'
    ];

    public function units()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}
