<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class category extends Model
{
    use HasFactory, Searchable;

    protected $tabel = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'desc',
        'created_at',
        'updated_at'
    ];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
        ];
    }

    public function subcategory()
    {
        return $this->hasMany(Subcategory::class);
    }
}
