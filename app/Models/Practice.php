<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'description', // fixed the typo
        'icon',
        'feature_image',
    ];
}
