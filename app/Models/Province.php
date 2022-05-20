<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $tabel = 'indonesia_province';
    protected $fillable = [
        'id',
        'code',
        'name',
        'meta',
        'created_at',
        'updated_at'
    ];
}
