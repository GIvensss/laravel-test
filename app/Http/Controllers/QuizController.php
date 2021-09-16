<?php

namespace App\Http\Controllers;

use App\Models\QuizModel;
use App\Service\PostService;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show()
    {
        return view('hallo');
    }
    public function submit(Request $request)
    {
        $name = $request->input('name');
        $gameId = $request->input('game');
        $post = new PostService();
        $post->add($name, $gameId);
        return redirect()->route('/user');
    }
}
