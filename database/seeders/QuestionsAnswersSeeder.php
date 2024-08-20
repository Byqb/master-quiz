<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class QuestionsAnswersSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            [
                'question_text' => 'What is the capital of France?',
                'category' => 'Geography',
                'xp' => 100,
                'answers' => [
                    ['answer_text' => 'Paris', 'is_correct' => true],
                    ['answer_text' => 'London', 'is_correct' => false],
                    ['answer_text' => 'Berlin', 'is_correct' => false],
                    ['answer_text' => 'Madrid', 'is_correct' => false],
                ]
            ],
            // Add more questions here...
        ];

        foreach ($questions as $questionData) {
            $question = Question::create([
                'question_text' => $questionData['question_text'],
                'category' => $questionData['category'],
                'xp' => $questionData['xp'],
            ]);

            foreach ($questionData['answers'] as $answerData) {
                Answer::create([
                    'question_id' => $question->id,
                    'answer_text' => $answerData['answer_text'],
                    'is_correct' => $answerData['is_correct'],
                ]);
            }
        }
    }
}