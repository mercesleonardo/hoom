<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'user_id',
        'path_image'

    ];

    public function user() {

        return $this->belongsTo(User::class);
    }
}
