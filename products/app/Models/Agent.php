<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    // public function people()
    // {
    //     return $this->belongsTo(People::class);
    // }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function registers()
    {
        return $this->belongsTo(RegisterClient::class);
    }

    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }

}
