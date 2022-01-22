<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'name' => $this->faker->name(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
            'name' => 'Shiban Ashiq C',
            'title' => 'Shiban Ashiq Developer',
            'role' => 'Web Developer',
            'facebook' => 'https://fb.com/shiban.ashiqc',
            'instagram' => 'https://instagram.com/_shibanashiqc',
            'github' => 'https://github.com/shibanashiqc',
            'wp' => 'wa.me/918129297698',
            'email' => 'admin@e.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$2.H5FJRWkitTOieYEMFajeNLnBiPDkItIU3.8jXi9mu6QmfItZbv2', //admin@123
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
