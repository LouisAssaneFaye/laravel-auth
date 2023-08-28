<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;


class Post extends Model
{
    use HasFactory;
    use SoftDelete;
    protected $fillable = [
        'title',
        'content',
        'image',
        'slug'
    ];
}
