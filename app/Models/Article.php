<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $tabel = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'title',
        'image',
        'source',
        'summary',
        'status',
        'content',
        'created_at',
        'updated_at'
    ];

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'keywords' => $this->keywords,
            'writer' => $this->writer,
        ];
    }

}
