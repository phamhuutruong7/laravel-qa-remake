<?php

namespace App\Http\Controllers\Api;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionsController extends Controller
{

    public function index()
    {
        $questions = Question::with('user')->latest()->paginate(10);

        return $questions;
    }


    public function store(Request $request)
    {
        //
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
