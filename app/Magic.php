<?php

namespace App;

use App\Unit;
use Illuminate\Database\Eloquent\Model;

class Magic extends Model
{
    protected $table = 'magic';

    protected $fillable = [
        'name', 'description', 'casting_roll',
    ];

    public function units()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}
