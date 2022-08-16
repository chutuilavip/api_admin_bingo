<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameList extends Model
{
    use HasFactory;
    public $table = "game_list";
    protected $primaryKey = 'gID';
    public $timestamps = false;
    protected $fillable = ['game_name','playCoin','reward_fee'];
}
