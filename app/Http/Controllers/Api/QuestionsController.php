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
        $questions = Question::with('user')->latest()->paginate(5);
        if(env('APP_ENV') =='local') sleep(2);
        return QuestionResource::collection($questions);
    }


    public function store(AskQuestionRequest $request)
    {
        $question = $request->user()->questions()->create($request->only('title', 'body'));

        if(env('APP_ENV') =='local') sleep(2);

        return response()->json([
            'message' => "Your question has been submitted",
            'question' => new QuestionResource($question)
        ]);
    }


    public function show(Question $question)
    {
        return response()->json([
            'title'     => $question->title,
            'body'      => $question->body,
            'body_html' => $question->body_html,
        ]);
    }


    public function update(AskQuestionRequest $request, Question $question)
    {
        $this->authorize("update", $question);
        $question->update($request->only('title','body'));
        return response()->json([
            'message' => "Your question has been updated.",
            'body_html' => $question->body_html,
        ]);
    }


    public function destroy(Question $question)
    {
        $this->authorize("delete", $question);
        $question->delete();
        return response()->json([
            'message' => "Your question has been deleted",
        ]);
    }
}
