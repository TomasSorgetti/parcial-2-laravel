<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\ExerciseServiceInterface;
use Illuminate\Http\Request;

/**
 * Todo -> Los ejercicios deberian ser bloqueados si el usuario no los tiene comprados o son gratuitos (deberia devolver los ejercicios sin el statement ni solution) y deberia mostrar una página (o en la misma) que permita desbloquearlos.
 */
class ExerciseController extends Controller
{

    public function show(ExerciseServiceInterface $exerciseService, $slug)
    {
        $exercises = $exerciseService->getAllBySlug($slug, 10);

        return view("dashboard.exercises", compact("exercises"));
    }

    public function showExercise(ExerciseServiceInterface $exerciseService, $slug)
    {
        $exercise = $exerciseService->getOneBySlug($slug, 10);

        return view("dashboard.exercise", compact("exercise"));
    }
}
