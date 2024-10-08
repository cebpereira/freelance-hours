<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => collect(fake()->words(5))->join(' '),
            'description' => htmlspecialchars(fake()->randomHtml()),
            'ends_at' => fake()->dateTimeBetween('now', '+3 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(['React', 'Laravel', 'PHP', 'MySQL', 'Vue', 'Python', 'Java', 'Node', 'Angular', 'C++', 'C#', '.NET'], random_int(1, 5)),
            'created_by' => User::factory(),
        ];
    }
}
