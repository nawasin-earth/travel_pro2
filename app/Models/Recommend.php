<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    protected $table = 'recommend'; 
    
    protected $fillable = [
        'travel_id',
        'restaurant_image',
        'restaurant_name',
        'restaurant_link',
        'cafe_image',
        'cafe_name',
        'cafe_link',
        'hotel_image',
        'hotel_name',
        'hotel_link',
    ];
}
