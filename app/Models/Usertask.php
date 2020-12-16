<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usertask extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'task_id',
        'task_title',
        'task_ans',
    ];
}
