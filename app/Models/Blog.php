<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'text',
        'path_image',
        'path_image_author',
        'active'
        
    ];
}
