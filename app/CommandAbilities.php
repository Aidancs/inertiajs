<?php

namespace App;

use App\Unit;
use Illuminate\Database\Eloquent\Model;

class CommandAbilities extends Model
{
    protected $table = 'command_abilities';

    protected $fillable = [
        'name', 'description', 'roll',
    ];

    public function units()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}
