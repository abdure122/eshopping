<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'customer_id',
        'email',
        'address',
        'phone'
    ];
    function customer()
    {
        return $this->hasOne(Customer::class, 'customer_id');
    }
}
