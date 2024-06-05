<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;

class StatistiquesController extends Controller
{
    public function list()
    {
        // Récupérer toutes les questions avec leurs réponses
        $questions = Question::with('answer')->get();

        // Préparer un tableau pour stocker les statistiques par mois
        $statsByMonth = [];

        // Parcourir chaque question
        foreach ($questions as $question) {
            // Formater le mois de la question sans utiliser Carbon
            $month = date('Y-m', strtotime($question->created_at));

            // Initialiser le tableau pour ce mois s'il n'existe pas
            if (!isset($statsByMonth[$month])) {
                $statsByMonth[$month] = [
                    'question_count' => 0,
                    'answer_count' => 0,
                    'answer_rate' => 0,
                ];
            }

            // Incrémenter le nombre de questions pour ce mois
            $statsByMonth[$month]['question_count']++;

            // Incrémenter le nombre de réponses pour ce mois
            if ($question->answer) {
                $statsByMonth[$month]['answer_count']++;
            }
            $statsByMonth[$month]['answer_rate'] = ($statsByMonth[$month]['answer_count'] / $statsByMonth[$month]['question_count']) * 100;
        }

        return view('statistiques', compact('statsByMonth'));
    }
}
