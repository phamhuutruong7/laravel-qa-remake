<?php

use Illuminate\Http\Request;


Route::post('/token', 'Auth\LoginController@getToken');

Route::get('/questions','Api\QuestionsController@index');

Route::get('/questions/{question}-{slug}','Api\QuestionDetailsController');

Route::middleware(['auth:api'])->group(function(){
    Route::apiResource('/questions','Api\QuestionsController')->except('index');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
