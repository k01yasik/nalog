<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'question_id' => 'required|integer',
            'answer' => 'required|string',
        ]);

        $questionId = $data['question_id'];
        $answer = clean($data['answer']);

        $answerEntry = new Answer;
        $answerEntry->question_id = $questionId;
        $answerEntry->answer = $answer;
        $answerEntry->user_id = Auth::id();
        $answerEntry->save();

        return [
          'answer' => $answer,
        ];
    }
}
