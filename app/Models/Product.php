<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Laravel\Scout\Searchable;
use Laravolt\Indonesia\Models\Extended\Provinsi;

class product extends Model
{
    use HasFactory, Searchable;

    // public function Readproduk()
    // {
    //     $product = DB::table('products')->get();
    //     return $product;
    // }
    protected $tabel = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'product_pict',
        'desc',
        'hs_code',
        'dimension',
        'id_subcategory',
        'id_indonesia_province',
        'id_indonesia_city',
        'id_company',
        'created_at',
        'updated_at'
    ];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'hs_code' => $this->hs_code,
            'id_subcategory' => $this->id_subcategory,
        ];
    }

    public function subcategory()
    {
        return $this->hasOne(Subcategory::class, "id", "id_subcategory");
    }

    public function company()
    {
        return $this->hasOne(Company::class, "id", "id_company");
    }

    public function IndonesiaProvince()
    {
        return $this->hasOne(IndonesiaProvince::class, "id", "id_indonesia_province");
    }

    public function IndonesiaCity()
    {
        return $this->hasOne(IndonesiaCity::class, "id", "id_indonesia_city");
    }
}
