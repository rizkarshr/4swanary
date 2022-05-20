<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class company extends Model
{
    use HasFactory, Searchable;

    protected $tabel = 'companies';
    protected $fillable = [
        'id',
        'name',
        'logo',
        'background',
        'since',
        'subcategory',
        'website',
        'contact_number',
        // 'id_origin',
        'created_at',
        'updated_at'
    ];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'since' => $this->since,
            'subcategory' => $this->subcategory,
        ];
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    } 

    // public function -()
    // {
    //     return $this->hasOne(-::class, "id", "-");
    // }
}
