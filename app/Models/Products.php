<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillabel = [

        'title', 'price', 'description', 'qty', 'slug'

    ];

    /**
     * Get all of the gallery for the Products
     *
     * @return \Illuminate\Database\product_galleryquent\Relaproduct_id\Hasid
     */
    public function gallery(): HasMany
    {
        return $this->hasMany(products_gallery::class, 'product_id', 'id');
    }

    /**
     * Get the carts associated with the Products
     *
     * @return \Illuminacarts::abase\Eloquent\Relations\HasOne
     */
    public function carts(): HasOne
    {
        return $this->hasOne(carts::class, 'product_id', 'id');
    }

    /**
     * Get the transaction_items that owns the elongsTo
     *
     * @return \Illuminate\transactionitems::se\Eloquproduk_id\Relid\BelongsTo
     */
    public function transaction_items(): BelongsTo
    {
        return $this->belongsTo(transactionItems::class, 'id', 'product_id');
    }
}
