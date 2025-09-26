<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Field yang boleh diisi mass-assignment
    protected $fillable = [
        'title',
        'author',
        'isbn',
        'cover_image',
        'publisher',
        'year_published',
        'pages',
    ];
}
