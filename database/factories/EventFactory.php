<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'available_quantity' => $this->faker->numberBetween(10, 100),
            'value' => $this->faker->randomFloat(2, 10, 100),
            'start_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'end_date' => $this->faker->dateTimeBetween('+1 year', '+2 years'),
            'type_event_id' => $this->faker->numberBetween(1, 2),
            'address_id' => $this->faker->numberBetween(1, 2),
            'status_event_id' => $this->faker->numberBetween(1, 2),
            'created_by' => $this->faker->numberBetween(1, 5),
        ];
    }
}
