<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel360 extends Model
{
    protected $table = 'travel_360';
    protected $fillable = ['travel_id', 'image_360_link'];

    public function travel()
    {
        return $this->belongsTo(Travel::class);
    }
}
