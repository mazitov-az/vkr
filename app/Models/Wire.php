<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Wire extends Model
{
    protected $fillable = ['title', 'weight', 'section'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
