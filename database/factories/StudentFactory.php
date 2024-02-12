<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $advisor = \App\Models\Advisor::factory()->create();
        return [
            'advisorID' => $advisor->id,
            'fname' => $this->faker->firstName,
            'lname' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'program' => $this->faker->randomElement(['Software Engineering', 'Networking']),
            'GPA' => $this->faker->randomFloat(2, 0, 4),
            'birthdate' => $this->faker->date(),
            'Residency Status' => $this->faker->randomElement(['In-State', 'Out-of-State', 'International']),
            'Enrollment Status' => $this->faker->randomElement(['Full-Time', 'Part-Time']),
            'Academic Standing' => $this->faker->randomElement(['Good Standing', 'Probation', null]),
            'Start Date' => $this->faker->date(),
            'Expected Graduation Date' => $this->faker->date(),
            'password' => $this->faker->password,
            'Total Credits Earned' => $this->faker->numberBetween(0, 120),
            'campusID' => $this->faker->numberBetween(1, 5),
            'rememberToken' => Str::random(10)

        ];
    }
}
