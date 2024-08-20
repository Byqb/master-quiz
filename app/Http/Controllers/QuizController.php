<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function start()
    {
        $questions = Question::all(); // Fetch questions from the database
        return view('quiz.start', compact('questions'));
    }

    public function submit(Request $request)
    {
        $user = auth()->user();
        $questions = Question::all();
        $correctAnswers = 0;
        $categoryScores = [];

        foreach ($questions as $question) {
            $userAnswer = $request->input('question_' . $question->id);
            if ($userAnswer == $question->correct_answer) {
                $correctAnswers++;
                $user->xp += $question->xp;
                $category = $question->category;
                if (!isset($categoryScores[$category])) {
                    $categoryScores[$category] = ['correct' => 0, 'total' => 0];
                }
                $categoryScores[$category]['correct']++;
            }
        }

        foreach ($categoryScores as $category => $score) {
            $categoryScores[$category]['total'] = Question::where('category', $category)->count();
        }

        $user->category_scores = $categoryScores;
        $user->save();

        return view('quiz.results', [
            'correctAnswers' => $correctAnswers,
            'totalQuestions' => count($questions),
            'categoryScores' => $categoryScores
        ]);
    }
}
