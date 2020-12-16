<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'amount',
        'phone_num',
        'payment_method',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
