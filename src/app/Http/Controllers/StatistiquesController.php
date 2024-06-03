<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class StatistiquesController extends Controller
{
    public function list()
    {
        $questions = Question::with('answer')->orderBy('created_at', 'ASC')->get();
        return view('statistiques')
            ->with('questions', $questions);
    }
}
