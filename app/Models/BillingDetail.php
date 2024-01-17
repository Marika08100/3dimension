<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BillingDetail extends Model

{
    use SoftDeletes;

    protected $fillable = [
        'user_id','city_id','address','company_name','bank','bank_account','unique_registration_code','registration_number', 'post_code'
    ];
    public function city(){
        return $this->belongsTo(City::class);
    }
}
