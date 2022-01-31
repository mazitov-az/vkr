<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Tube extends Model
{
    protected $fillable = ['title', 'weight', 'diameter'];


}
