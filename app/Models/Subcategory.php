<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class subcategory extends Model
{
    use HasFactory, Searchable;

    protected $tabel = 'subcategories';
    protected $fillable = [
        'id',
        'name',
        'desc',
        'id_subcategory',
        'created_at',
        'updated_at'
    ];

    //SEARCH

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
        ];
    }

    //RELATION

    public function product()
    {
        return $this->hasMany(Product::class);
    } 

    public function category()
    {
        return $this->hasOne(Category::class, "id", "id_category");
    }
}
