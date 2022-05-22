<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class IndonesiaCity extends Model
{
    use HasFactory, Searchable;

    protected $tabel = 'indonesia_cities';
    protected $fillable = [
        'id',
        'code',
        'province_code',
        'name',
        'meta',
        'created_at',
        'updated_at'
    ];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
        ];
    }

    public function IndonesiaProvince()
    {
        return $this->hasOne(IndonesiaProvince::class, "id", "province_code");
    }

    public function company()
    {
        return $this->hasMany(Company::class);
    } 

    public function product()
    {
        return $this->hasMany(Product::class);
    } 
}
