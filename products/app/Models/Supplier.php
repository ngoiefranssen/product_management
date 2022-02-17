<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }

    // public function people()
    // {
    //     return $this->belongsTo(People::class);
    // }

    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }
}
