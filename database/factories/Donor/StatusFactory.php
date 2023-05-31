<?php

namespace Database\Factories\Donor;

use App\Models\Donor\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatusFactory extends Factory
{
    protected $model = Status::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}
