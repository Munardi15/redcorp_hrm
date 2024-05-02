<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeDetail>
 */
class EmployeeDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $employeeId = Employee::inRandomOrder()->first()->id;

        return [
            'employee_id' => $employeeId,
            'experience' => $this->faker->numberBetween(1, 20),
            'job_title' => $this->faker->jobTitle(),
            'job_desc' => $this->faker->text(),
        ];
    }
}
