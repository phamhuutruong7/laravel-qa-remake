<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Http\Resources\QuestionDetailsResource;
use App\Question;


class QuestionDetailsController extends Controller
{

    public function __invoke(Question $question)
    {
        $question->increment('views');
        return new QuestionDetailsResource($question);
    }
}
