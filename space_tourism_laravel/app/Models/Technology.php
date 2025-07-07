<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Technology extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image_url', 'image_landscape_url'];
}
