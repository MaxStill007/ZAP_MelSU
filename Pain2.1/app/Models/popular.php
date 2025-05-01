<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class popular extends Model
{
    protected $fillable = ['name', 'code','description','image','price'];
    
    /** @use HasFactory<\Database\Factories\PopularFactory> */
    use HasFactory;
}
