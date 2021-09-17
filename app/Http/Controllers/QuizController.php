<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Service\PostService;
use Illuminate\Contracts\Container\Container;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuizController extends Controller
{
    public function show(PostService $post): View
    {
        return view(
            'home',
            [
                'games' => $post->getGames(),
                'posts' => $post->getPosts()
            ]
        );
    }
    public function submit(Request $request, PostService $postService): RedirectResponse
    {
        $name = $request->input('name');
        $gameId = $request->input('game');

        $postService->add($name, $gameId);
        return redirect()->route('home');
    }
}
