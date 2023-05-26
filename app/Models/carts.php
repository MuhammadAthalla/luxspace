<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class carts extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id','product_id'

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');

    }

    /**
     * Get the product associaned with the carts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'product_id');
    }
}
