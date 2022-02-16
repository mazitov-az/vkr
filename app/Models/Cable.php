<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Cable extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'connector_id',
        'wire_id',
        'shieldinge_id',
        'tube_id',
        'weight',
    ];

    public function users()
    {
    	return $this->belongsTo(User::class);
    }

    public function connectors()
    {
        return $this->morphedByMany(Connector::class, 'cableable');
    }

    public function wires()
    {
        return $this->morphedByMany(Wire::class, 'cableable');
    }

    public function shieldinges()
    {
        return $this->morphedByMany(Shieldinge::class, 'cableable');
    }

    public function tubes()
    {
        return $this->morphedByMany(Tube::class, 'cableable');
    }

}
