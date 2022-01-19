<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connector extends Model
{
    protected $fillable = ['title', 'weight', 'max_section'];
}
