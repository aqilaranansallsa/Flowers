<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'invoice',
        'nama_penerima',
        'telp_penerima',
        'alamat_pengiriman',
        'tanggal_pengiriman',
        'catatan',
        'metode_pembayaran',
        'status_pembayaran',
        'total',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}