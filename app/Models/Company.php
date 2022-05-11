<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $tabel = 'companies';
    protected $fillable = [
        'id',
        'name',
        'logo',
        'banner',
        'since',
        'sector',
        'website',
        'contact_number',
        'id_origin',
        'created_at',
        'updated_at'
    ];
}
