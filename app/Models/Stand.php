<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
