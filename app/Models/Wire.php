<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Wire extends Model
{
	public $timestamps = false;
    protected $fillable = ['title', 'weight', 'section'];

    public function cables()
    {
    	return $this->morphToMany(Cable::class, 'cableable');
    }

}
