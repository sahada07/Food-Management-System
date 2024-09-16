<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model


{
    protected $fillable = ['name', 'location'];
    
    public function menus()
{
    
    return $this->hasMany(Menu::class);
}

    use HasFactory;
}
