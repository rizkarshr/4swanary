<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product extends Model
{
    use HasFactory;
    public function Readproduk()
    {
        $product = DB::table('products')->get();
        return $product;
    }
    protected $tabel = 'products';
    protected $fillable = [
        'id',
        'name',
        'product_pict',
        'desc',
        'hs_code',
        'dimension',
        'id_subcategory',
        'id_origin',
        'id_company',
        'created_at',
        'updated_at'
    ];

    public function subcategory()
    {
        return $this->hasOne(Category::class, "id", "subcategory_id");
    }
}
