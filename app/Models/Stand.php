<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description','type','seat','cover'
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
