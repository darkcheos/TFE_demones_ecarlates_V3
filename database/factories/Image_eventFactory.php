<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\image_event>
 */
class Image_eventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ime_nom' => 'default',
            'ime_lien' => '/storage/events/ie9yzPWPiNVaZecpAaFODyYLxw.jpg',
        ];
    }
}
