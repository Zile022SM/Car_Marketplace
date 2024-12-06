<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Car;


class CarImage extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'car_id',
        'image_path',
        'sort_order',
    ];

    public function car():BelongsTo{
        return $this->belongsTo(Car::class);
    }
}
