<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;

    protected $table = 'games';
    protected int $id;
    protected string $game;

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
