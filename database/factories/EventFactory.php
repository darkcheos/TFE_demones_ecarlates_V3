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
            'eve_titre' => 'mariage',
            'eve_contenu' => 'mariage de serena et de son hamburger',
            'eve_date_event' => '2023-02-14 23:38:20',
            'eve_fin_event' => '2023-05-14 23:38:20',
        ];
    }
}
