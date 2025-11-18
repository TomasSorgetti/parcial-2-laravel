<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\ExerciseServiceInterface;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{

    public function show(ExerciseServiceInterface $exerciseService, $slug)
    {
        $exercises = $exerciseService->getAllBySlug($slug, 10);

        return view('dashboard.exercises', compact('exercises'));
    }

    public function showExercise(ExerciseServiceInterface $exerciseService, $slug)
    {
        $exercise = $exerciseService->getOneBySlug($slug, 10);

        return view('dashboard.exercise', compact('exercise'));
    }
}
