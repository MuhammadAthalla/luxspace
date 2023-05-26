<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class transactionItems extends Model
{
    use HasFactory;

    protected $guarded=[];

    /**
     * Get the product associated with the transactionItems
     *
     * @return \Illuminaproduct\Database\id\Relproduct_id\HasOne
     */
    public function products(): HasOne
    {
        return $this->hasOne(Products::class, 'id', 'product_id');
    }
}
