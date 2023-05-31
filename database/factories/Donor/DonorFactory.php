<?php

namespace Database\Factories\Donor;

use App\Models\Donor\Donor;
use App\Models\Donor\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonorFactory extends Factory
{
    protected $model = Donor::class;

    public function definition(): array
    {
        return [
            'status_id' => Status::factory(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->email(),
            'full_address' => $this->faker->address(),
            'job_title' => 'Developer',
            'social_type' => $this->faker->randomElement(['twitter', 'github', 'instagram']),
            'social_url' => $this->faker->url()
        ];
    }
}
