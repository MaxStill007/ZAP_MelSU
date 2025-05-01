<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['name', 'code','description','image','price'];

    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
}
