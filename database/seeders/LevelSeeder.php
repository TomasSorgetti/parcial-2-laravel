<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    public function run(): void
    {
        $levels = [
            ['name' => 'SL', 'exam_board' => 'IB'],
            ['name' => 'HL', 'exam_board' => 'IB'],
            ['name' => 'Core', 'exam_board' => 'IGCSE'],
            ['name' => 'Extended', 'exam_board' => 'IGCSE'],
        ];

        foreach ($levels as $level) {
            Level::create($level);
        }
    }
}
