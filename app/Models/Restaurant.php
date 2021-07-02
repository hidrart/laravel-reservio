<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function stands(): HasMany
    {
        return $this->hasMany(Stands::class);
    }

}
