<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class DeliveryPrice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['date_from', 'date_to', 'price', 'status', 'country_id', 'county_id', 'city_id'];
    protected $appends = ['country_name', 'county_name', 'city_name'];

    public function scopeActive()
    {
        $today = Carbon::today();

        return $this->where('status',1)
        ->where(function($query) use($today){
            $query->whereDate('date_from', '<=', $today)
            ->orWhere('date_from', null);
        })
        ->where(function($query) use($today){
            $query->whereDate('date_to', '>=', $today)
            ->orWhere('date_to', null);
        });
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function county()
    {
        return $this->belongsTo(County::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function getCountryNameAttribute()
    {
        if ($this->country) {
            return $this->country->name_ro;
        } else {
            return null;
        }
    }

    public function getCountyNameAttribute()
    {
        if ($this->county) {
            return $this->county->name_ro;
        } else {
            return null;
        }
    }

    public function getCityNameAttribute()
    {
        if ($this->city) {
            return $this->city->name_ro;
        } else {
            return null;
        }
    }
}
