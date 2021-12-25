<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'status'
    ];

    function orders()
    {
        return $this->hasMany(OrderItem::class, 'customer_id');
    }
    function detail()
    {
        return $this->belongsTo(ShippingDetail::class, 'customer_id');
    }
}
