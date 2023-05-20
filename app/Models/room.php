<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;

    protected $fillable = [
        'roomtypeid',
        'roomname',
        'area',
        'price',
        'facility'
    ];

    public function roomtype()
    {
        return $this->hasMany(roomtype::class);
    }   
}
