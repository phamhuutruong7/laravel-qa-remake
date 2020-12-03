<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyPostsController extends Controller
{

    public function __invoke(Request $request)
    {
        return response()->json([
            'data' => $request->user()->posts()
        ]);
    }
}