<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    use HasFactory;

    protected $fillable = [
        'description','type','seat','cover'
    ];
    
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function Order()
    {
        return $this->hasMany(Order::class);
    }
}
