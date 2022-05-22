<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class IndonesiaProvince extends Model
{
    use HasFactory, Searchable;

    protected $tabel = 'indonesia_province';
    protected $fillable = [
        'id',
        'code',
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

    public function IndonesiaCity()
    {
        return $this->hasMany(IndonesiaCity::class);
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
