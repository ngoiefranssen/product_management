<?php

namespace App\Models;

use JetBrains\PhpStorm\Pure;
use App\Models\Register_client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function registers_clients()
    {
        return $this->hasMany(Register_client::class);
    }
}
