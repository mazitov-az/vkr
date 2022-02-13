<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CablesList extends Model
{
	public $timestamps = false;
    public function cableable()
    {
    	return $this->morphTo();
    }
}
