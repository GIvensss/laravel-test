<?php

namespace App\Service;

use App\Models\Games;
use App\Models\User;

class PostService
{
    public function add($name, $gameId)
    {
        $user = new User();
        $user->fill([['name' => $name], ['games_id' => $gameId]]);
        $user->save();
    }
}
