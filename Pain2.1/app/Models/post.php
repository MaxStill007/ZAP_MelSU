<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['name','number','email','idea'];

    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
}
