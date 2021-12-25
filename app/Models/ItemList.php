<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemList extends Model
{
    use HasFactory;
    // protected $dateFormat = 'Y_m_i';
    protected $fillable = [
        'campany_id',
        'catagory_id',
        'item_name',
        'image_id',
        'price',
        'brand',
        'condition',
        'color',
        'size',
        'status',
    ];
    public function getItemNameAttribute($value)
    {
        return strtoupper($value);
    }
    public function getBrandAttribute($value)
    {
        return strtoupper($value);
    }
    public function getPriceAttribute($value)
    {
        return "$" . $value;
    }
    public function catagory()
    {
        return  $this->belongsTo(CatagoryList::class, 'catagory_id');
    }
    public function image()
    {
        return $this->belongsTo(ItemImage::class, 'image_id');
    }


    public function order()
    {
        return $this->hasOne(OrderItem::class, 'item_id');
    }
    public function campany()
    {
        return $this->belongsTo(User::class);
    }
    public function cart()
    {
        return $this->hasOne(OrderItem::class, 'item_id');
    }
}
