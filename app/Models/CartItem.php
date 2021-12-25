<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_id',
        'quantity',
        'status'
    ];
    function item()
    {
        return $this->belongsTo(ItemList::class, 'item_id');
    }
}
