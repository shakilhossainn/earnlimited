<?php

namespace App\Models;

use App\Models\User;
use App\Models\Usertask;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
    'title',
    'video_one',
    'video_two',
    'video_three',
    'video_four',
    'video_five',];

        public function usertaskby(User $user)
        {
            return $this->usertask->contains('user_id', $user->id);
        }

        public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function usertask()
        {
            return $this->hasMany(Usertask::class);
        }



}
