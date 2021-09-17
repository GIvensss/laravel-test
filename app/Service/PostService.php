<?php

namespace App\Service;

use App\Models\Games;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class PostService
{
    protected User $user;
    protected Games $games;

    public function add($name, $gameId): void
    {
        $this->user = new User();
        $this->user->name = $name;
        $this->user->games_id = $gameId;
        $this->user->save();
    }

    public function getPosts(): Collection
    {
        $this->user = new User();
        return $this->user->with('games')->get();
    }

    public function getGames(): Collection
    {
        $this->games = new Games();
        return $this->games->all();
    }
}
