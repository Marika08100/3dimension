<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'code',
        'value',
        'type',
        'start_date',
        'end_date',
        'used_once',
        'used_no',
        'status',
        'free_delivery'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


}
