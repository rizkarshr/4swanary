<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $tabel = 'articles';
    protected $fillable = [
        'id',
        'title',
        'keywords',
        'image',
        'desc',
        'content',
        'writer',
        'source',
        'status',
        'created_at',
        'updated_at'
    ];

}
