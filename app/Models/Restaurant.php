<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description','cover','score','address'
    ];
    
    public function stand()
    {
        return $this->hasMany(Stand::class);
    }
    public function food()
    {
        return $this->hasMany(Food::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
