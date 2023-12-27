<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    /**
     * Get the order associated with the Refund
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function order(): HasOne
    {
        return $this->hasOne(Order::class, 'order_id', 'id');
    }
}
