<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomtype extends Model
{
    use HasFactory;

    protected $fillable = [
        'roomtype'
    ];

    public function rooms()
    {
        return $this->hasOne(room::class);
    }
}
