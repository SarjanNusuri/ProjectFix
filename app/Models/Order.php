<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [
        'product_id',
        'jumlah',
        'total_harga',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
