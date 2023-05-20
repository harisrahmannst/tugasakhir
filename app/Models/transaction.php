<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'totalroomprice',
        'totalextracharge',
        'finaltotal'
    ];

    public function Users()
    {
        return $this->belongsTo(Users::class);
    }
}
