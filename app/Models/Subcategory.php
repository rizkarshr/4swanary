<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    use HasFactory;

    protected $tabel = 'subcategories';
    protected $fillable = [
        'id',
        'name',
        'desc',
        'created_at',
        'updated_at'
    ];

    public function product()
    {
        return $this->hasMay(Product::class);
    }
}
