<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Exercise;
use App\Models\Category;
use App\Models\Level;

class ExerciseSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();
        $levels = Level::all();

        $exercises = [
            [
                'title' => 'Solve the quadratic equation',
                'statement' => 'Solve the equation: \( x^2 - 5x + 6 = 0 \)',
                'solution' => 'The solutions are x = 2 and x = 3.',
                'description' => 'Practice solving simple quadratic equations using factoring.',
                'difficulty' => 'easy',
                'exam_board' => 'IGCSE',
            ],
            [
                'title' => 'Find the derivative',
                'statement' => 'Find \( f\'(x) \) if \( f(x) = 3x^3 - 2x + 7 \)',
                'solution' => 'Derivative: \( f\'(x) = 9x^2 - 2 \)',
                'description' => 'Differentiate a cubic polynomial by applying basic derivative rules.',
                'difficulty' => 'medium',
                'exam_board' => 'IB',
            ],
            [
                'title' => 'Simplify the expression',
                'statement' => 'Simplify: \( \frac{2x^2 - 8}{2x} \)',
                'solution' => 'Result: \( x - \frac{4}{x} \)',
                'description' => 'Simplify rational expressions by factoring and reducing terms.',
                'difficulty' => 'easy',
                'exam_board' => 'IGCSE',
            ],
            [
                'title' => 'Find the angle',
                'statement' => 'In a right triangle, if opposite=7 and hypotenuse=10, find the angle.',
                'solution' => 'Angle = arcsin(0.7) ≈ 44.43°',
                'description' => 'Use sine ratios to determine an angle in a right triangle.',
                'difficulty' => 'medium',
                'exam_board' => 'IB',
            ],
            [
                'title' => 'Probability of two events',
                'statement' => 'P(A) = 0.4, P(B)=0.3, A and B independent. Compute P(A∩B).',
                'solution' => 'P(A∩B) = 0.4 × 0.3 = 0.12',
                'description' => 'Apply the multiplication rule for independent events.',
                'difficulty' => 'easy',
                'exam_board' => 'IB',
            ],
            [
                'title' => 'Statistics mean and median',
                'statement' => 'Dataset: 2, 5, 9, 9, 10. Find mean and median.',
                'solution' => 'Mean = 7, Median = 9',
                'description' => 'Calculate measures of central tendency from a small dataset.',
                'difficulty' => 'easy',
                'exam_board' => 'IGCSE',
            ],
            [
                'title' => 'Area under curve',
                'statement' => 'Compute ∫(0→2) (4x - x²) dx',
                'solution' => 'Area = 20/3',
                'description' => 'Integrate a polynomial to find the area between curve and x-axis.',
                'difficulty' => 'hard',
                'exam_board' => 'IB',
            ],
            [
                'title' => 'Factorize the expression',
                'statement' => 'Factorize: \( x^3 - 3x^2 - 4x + 12 \)',
                'solution' => 'Result: (x-3)(x^2 - 4) = (x-3)(x-2)(x+2)',
                'description' => 'Factorize a cubic polynomial by grouping and recognizing patterns.',
                'difficulty' => 'medium',
                'exam_board' => 'IGCSE',
            ],
            [
                'title' => 'Find intersection point',
                'statement' => 'Lines: y=2x+1 and y=-x+4. Find intersection.',
                'solution' => 'Intersection at (1,3)',
                'description' => 'Solve simultaneous linear equations to find the point of intersection.',
                'difficulty' => 'easy',
                'exam_board' => 'IGCSE',
            ],
            [
                'title' => 'Function domain',
                'statement' => 'Find domain of \( f(x) = \frac{1}{\sqrt{x-2}} \)',
                'solution' => 'Domain: x > 2',
                'description' => 'Determine domain restrictions for functions involving roots and fractions.',
                'difficulty' => 'medium',
                'exam_board' => 'IB',
            ],
        ];

        foreach ($exercises as $ex) {
            Exercise::create([
                'title' => $ex['title'],
                'slug' => Str::slug($ex['title']),
                'statement' => $ex['statement'],
                'solution' => $ex['solution'],
                'description' => $ex['description'],
                'difficulty' => $ex['difficulty'],
                'exam_board' => $ex['exam_board'],
                'category_id' => $categories->random()->id,
                'level_id' => $levels->random()->id,
                'price' => rand(5, 20),
                'is_published' => true,
            ]);
        }
    }
}
