<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'type',
        'composition',
        'description',
        'price',
        'stock',
        'jumlah_tangkai',
    ];

    public function photos()
    {
        return $this->hasMany(ProductPhoto::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}