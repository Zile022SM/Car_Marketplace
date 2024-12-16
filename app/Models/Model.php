<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Car;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Maker;


class Model extends BaseModel
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'maker_id',
    ];

    public function cars():HasMany{
        return $this->hasMany(Car::class);
    }

    public function maker():BelongsTo{
        return $this->belongsTo(Maker::class);
    }
}
