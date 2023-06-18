<?php

namespace Database\Factories;

use App\Models\lesson;
use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{

    protected $model = lesson::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->name();
        return [
            'name' => $name,
            'module_id' => Module::factory(),
            'url' => Str::slug($name),
            'video' => Str::random(),
        ];
    }
}
