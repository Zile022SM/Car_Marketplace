<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as VehicleModel;
use App\Models\Car;
use App\Models\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Maker extends VehicleModel
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function cars():HasMany{
        return $this->hasMany(Car::class);
    }

    public function models():HasMany{
        return $this->hasMany(Model::class);
    }



}