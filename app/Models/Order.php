<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    
    /**
     * Get the refund associated with the Refund
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function refund(): HasOne
    {
        return $this->hasOne(Refund::class, 'order_id', 'id');
    }
}
