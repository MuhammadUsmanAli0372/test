<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['*'];

    public function location(): BelongsTo
    {
        return $this->belongsTo(State::class, 'customer_location_id');
    }

    public function cars(): HasMany
    {
        return $this->hasMany(CustomerCar::class, 'customer_id');
    }

    public function car(): HasOne
    {
        return $this->hasOne(CustomerCar::class, 'customer_id');
    }

}
