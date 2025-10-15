<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $fillable = [
    'nama_produk',
    'description',
    'price',
    'image',
    'transaction_date',
    ];
}
