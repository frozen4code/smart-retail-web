<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingItems extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'brand', 'type', 'price', 'description', 'information'
    ];
    
    protected $hidden = [
        'delivery', 'rating'
    ];
}