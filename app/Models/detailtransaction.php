<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailtransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'custname',
        'totalroomprice',
        'totalextracharge',
        'finaltotal'
    ];

    public function transactions()
    {
        return $this->belongsTo(transaction::class);
    }

    public function rooms()
    {
        return $this->belongsToMany(room::class)->withPivot('subtotalroom');
    }
}
