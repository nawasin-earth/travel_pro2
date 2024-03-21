<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $table = 'travel';
    protected $fillable = ['name_t', 'province_t', 'description_t', 'address', 'time', 'image','season','coordinates','contact','website','detail','admission','updated_by'];

    public function travel360()
    {
        return $this->hasMany(Travel360::class);
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    
}