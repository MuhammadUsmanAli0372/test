<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerCar extends Model
{
    use HasFactory;

    public function delivery_location(): BelongsTo
    {
        return $this->belongsTo(State::class, 'delivery_id');
    }

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

    public function car_model(): BelongsTo
    {
        return $this->belongsTo(CarModel::class, 'car_model_id');
    }
}
