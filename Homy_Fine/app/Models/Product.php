<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Product extends Model
{
    use HasFactory;


    public function Section(): BelongsTo
    {
        return $this->belongsTo(Section::class);

    }

    public function shopping_carts(): BelongsTo
    {
        return $this->belongsTo(shopping_carts::class);

    }
}
