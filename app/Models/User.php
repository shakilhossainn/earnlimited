<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Usertask;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'active_id',
        'balance',
        'refer_by',
        'refer_code',
        'phone_num',
        'tranjecton_id',
        'image',
        'description',
        'address',
        'slug',
        'user_roll',
        'email',
        'password',
    ];


    public function task()
    {
       return $this->hasMany(Task::class);
    }
    public function contact()
    {
       return $this->hasMany(Contact::class);
    }
    public function usertask()
    {
       return $this->hasMany(Usertask::class);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
