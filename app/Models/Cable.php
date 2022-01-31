<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Cable extends Model
{
    protected $fillable = ['title', 'weight', 'max_section'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
