<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
