<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'units';

    protected $fillable = [
        'name', 'move', 'save', 'wounds', 'bravery', 'unit_id'
    ];

    public function abilities()
    {
        return $this->hasMany(Abilities::class, 'unit_id');
    }

    public function commandAbilities()
    {
        return $this->hasMany(CommandAbilities::class, 'unit_id');
    }

    public function magic()
    {
        return $this->hasMany(Magic::class, 'unit_id');
    }

    public function meleeWeapons()
    {
        return $this->hasMany(MeleeWeapons::class, 'unit_id');
    }

    public function missileWeapons()
    {
        return $this->hasMany(MissileWeapons::class, 'unit_id');
    }
}
