<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bill extends Model
{
    use HasFactory;


    public function shoping_cart(): HasMany
    {
        return $this->hasMany(shopping_carts::class);

    }

    public function user(): HasMany
    {
        return $this->hasMany(User::class);

    }

}
