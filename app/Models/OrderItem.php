<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'campany_id',
        'catagory_id',
        'customer_id',
        'item_id',
        'quantity',
        'status'
    ];
    public function item()
    {
        return $this->hasOne(ItemList::class);
    }
    function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function catagory()
    {
        return $this->belongsTo(CatagoryList::class);
    }
}
