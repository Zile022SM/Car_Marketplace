<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\CarFeature;

class Car extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'maker_id',
        'model_id',
        'year',
        'price',
        'vin',
        'mileage',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'address',
        'phone',
        'description',
        'image',
        'published_at',
    ];

    public $timestamps = false;


    public function features():HasOne {
        return $this->hasOne(CarFeature::class);
    }

    public function primaryImage():HasOne {
        return $this->hasOne(CarImage::class)->oldestOfMany('sort_order');
    }

    public function images():HasMany {
        return $this->hasMany(CarImage::class);
    }

    public function carType():BelongsTo{
        return $this->belongsTo(CarType::class);
    }

    public function favouredUsers():BelongsToMany{
        return $this->belongsToMany(User::class,'favourite_cars','car_id','user_id');
    }

    public function fuelType():BelongsTo{
        return $this->belongsTo(FuelType::class);
    }

    public function maker():BelongsTo{
        return $this->belongsTo(Maker::class);
    }

    public function model():BelongsTo{
        return $this->belongsTo(Model::class);
    }

    public function owner():BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }


    public function city():BelongsTo{
        return $this->belongsTo(City::class);
    }


}
