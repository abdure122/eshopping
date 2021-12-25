<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatagoryList extends Model
{
    use HasFactory;
    protected $fillable = [
        'catagory',

    ];

    public function items()
    {
        return $this->hasMany(ItemList::class, 'catagory_id');
    }
    public function orders()
    {
        return $this->hasMany(OrderItem::class, 'catagory_id');
    }
}
