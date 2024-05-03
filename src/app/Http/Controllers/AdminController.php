<?php

namespace App\Http\Controllers;

use App\Models\Question;


class AdminController extends Controller
{
    public function list()
    {
        $questions = Question::whereNull('answerId')
                     ->orWhere('answerId', '')
                     ->get();
        return view('adminpanel')
            ->with('questions', $questions);
    }
}