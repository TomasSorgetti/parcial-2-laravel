<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Algebra' => 'Solve equations, work with expressions, and understand algebraic structures.',
            'Geometry' => 'Explore shapes, sizes, positions, and the properties of space.',
            'Trigonometry' => 'Study angles, triangles, and trigonometric functions.',
            'Probability' => 'Analyze randomness, outcomes, and likelihood of events.',
            'Statistics' => 'Interpret data, calculate measures, and understand distributions.',
            'Calculus' => 'Learn limits, derivatives, integrals, and continuous change.',
            'Functions' => 'Understand relationships, graphs, and transformations of functions.',
        ];

        foreach ($categories as $name => $description) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => $description,
            ]);
        }
    }
}
