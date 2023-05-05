<?php

namespace Database\Factories;

class UserFactory extends Factory
{
    public function definition(): array
    {
        $username = $this->faker->userName();

        return [
            'username' => $username,
            'nickname' => $username,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verification_token' => bin2hex(random_bytes(16)),
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => '123456',
            'reset_password_code' => rand(100000, 999999),
            'remember_token' => bin2hex(random_bytes(16)),
            'status' => 0,
            'welcomed' => 0,
            'is_admin' => 0,
            'last_login_at' => date('Y-m-d H:i:s'),
        ];
    }

    public function unverified(): array
    {
        return [
            'email_verified_at' => null,
        ];
    }
}
