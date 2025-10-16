<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Product extends Model
{
    protected $table = 'product';
    protected static function boot(){

    parent::boot();

    static::creating(function($product) {
        $product->slug = Str::slug($product->name);
    });

    static::updating(function($product) {
        $product->slug = Str::slug($product->name);
    });
    
}
public function getRouteKeyName()
{
    return 'slug';
}

        protected $fillable =[
           'name',
           'description',
            'price',
            'image',
            'slug',
            'stock',
        ];

        

}
