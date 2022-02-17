<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\Pure;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function people()
    // {
    //     return $this->belongsTo(People::class);
    // }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
