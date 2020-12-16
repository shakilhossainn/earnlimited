<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'shakil ahmed',
            'email' => 'shakil@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$p2Ob55zyDQ.fRppII6jUUeSlKCzjRkiDsMYmACuQS0eCXMFX0v4wm', // password
            'remember_token' => Str::random(10),
        ];
    }
}
