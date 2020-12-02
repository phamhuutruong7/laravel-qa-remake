<?php

namespace App\Http\Controllers\Api;

use App\Answer;
use App\Question;
use App\Http\Controllers\Controller;
use App\Http\Resources\AnswerResource;
use Illuminate\Http\Request;

class AnswersController extends Controller
{

    public function index(Question $question)
    {
        $answers = $question->answers()->with('user')->simplePaginate(3);
        return AnswerResource::collection($answers);
    }


    public function store(Question $question, Request $request)
    {



        $answer = $question->answers()->create($request->validate([
                'body' => 'required'
            ]) + ['user_id' => \Auth::id()]);


        return response()->json([
            'message' => "Your answer has been submitted successfully",
            'answer' => new AnswerResource($answer->load('user'))
        ]);

    }    


    public function edit(Question $question, Answer $answer)
    {
        $this->authorize('update', $answer);

        return view('answers.edit', compact('question', 'answer'));
    }


    public function update(Request $request, Question $question, Answer $answer)
    {
        $this->authorize('update', $answer);

        $answer->update($request->validate([
            'body' => 'required',
        ]));

        return response()->json([
            'message' => 'Your answer has been updated',
            'body_html' => $answer->body_html
        ]);
    }

    public function destroy(Question $question, Answer $answer)
    {
        $this->authorize('delete', $answer);

        $answer->delete();

        return response()->json([
            'message' => "Your answer has been removed"
        ]);


    }
}
