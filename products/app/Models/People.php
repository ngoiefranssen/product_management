<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Agent;
use App\Models\Client;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class People extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function agents()
    {
        return $this->hasMany(Agent::class);
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }
}
