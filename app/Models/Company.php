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
        'website',
        'contact_number',
        'id_subcategory',
        'id_indonesia_province',
        'id_indonesia_city',
        'created_at',
        'updated_at'
    ];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'since' => $this->since,
            'id_subcategory' => $this->id_subcategory,
            'id_indonesia_province' => $this->id_indonesia_province,
            
        ];
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    } 

    public function IndonesiaProvince()
    {
        return $this->hasOne(IndonesiaProvince::class, "id", "id_indonesia_province");
    }

    public function IndonesiaCity()
    {
        return $this->hasOne(IndonesiaCity::class, "id", "id_indonesia_city");
    }

    public function subcategory()
    {
        return $this->hasOne(Subcategory::class, "id", "id_subcategory");
    }
}
