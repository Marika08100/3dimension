<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'type', 'value', 'start_date', 'end_date', 'status'];
    protected $appends = ['product_title'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function getProductTitleAttribute()
    {
        return $this->product->title;
    }
}
