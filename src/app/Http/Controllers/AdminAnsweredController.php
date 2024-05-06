<?php

namespace App\Http\Controllers;

use App\Models\Question;


class AdminAnsweredController extends Controller
{
    public function list()
    {
        $questions = Question::with('answer')->get();
        return view('adminAnswered')
            ->with('questions', $questions);
    }
}