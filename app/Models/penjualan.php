<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class penjualan extends Model
{
    /** @use HasFactory<\Database\Factories\PenjualanFactory> */
    use HasFactory;


    protected $table = 'penjualans';
    protected $guarded = [];


    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }
}
