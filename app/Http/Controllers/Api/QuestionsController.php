<?php

namespace App\Http\Controllers\Api;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Http\Requests\AskQuestionRequest;

class QuestionsController extends Controller
{

    public function index()
    {
        $questions = Question::with('user')->latest()->paginate(10);

        return QuestionResource::collection($questions);
    }


    public function store(Request $request)
    {

        $question = $request->user()->questions()->create($request->only('title', 'body'));
        return response()->json([
            'message' => "Your question has been submitted",
            'question' => new QuestionResource($question)
        ]);
    }


    public function show(Question $question)
    {
        //
    }


    public function update(Request $request, Question $question)
    {
        //
    }


    public function destroy(Question $question)
    {
        //
    }
}
