<?php

namespace App\Http\Controllers;

use App\Models\Question;


class AdminNoAnswerController extends Controller
{
    public function list()
    {
        $questions = Question::whereNull('answerId')
                     ->orWhere('answerId', '')
                     ->get();
        return view('adminNoAnswer')
            ->with('questions', $questions);
    }
}
