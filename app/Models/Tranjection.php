<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tranjection extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_email',
        'tanjection',
    ];
}
