<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Shieldinge extends Model
{
    protected $fillable = ['title', 'weight', 'diameter'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }    
}
