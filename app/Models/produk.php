<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class produk extends Model
{
    /** @use HasFactory<\Database\Factories\ProdukFactory> */
    use HasFactory;

    use HasFactory;

    protected $table = 'produk';
    protected $guarded = ['id'];

    public function penjualans(): HasMany
    {
        return $this->hasMany(Penjualan::class, 'id_produk', 'id');
    }
}
