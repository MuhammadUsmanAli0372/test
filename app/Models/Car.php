<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'value', 'title',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(CustomerCar::class, 'car_id');
    }

    public function order(): HasOne
    {
        return $this->hasOne(CustomerCar::class, 'car_id');
    }
}
