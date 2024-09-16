<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

   public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    use HasFactory;
}
