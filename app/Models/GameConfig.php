<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameConfig extends Model
{
    use HasFactory;
    
    public $table = "game_config";
    public $timestamps = false;

    protected $fillable = [
        'playTime',
        'coolTime',
        'number_pick_score',
        'number_bingo_score',
        'number_combo_score',
        'league_join_price',
        'league_play_price',
        'league_reward_fee',
    ];
    
    public function modify($data = []){
        if (empty($data)) return false;
        $fields = config('self.game_config.fields');

        $data = array_intersect_key($data, array_flip($fields));
        $update = $this->update($data);
        
        return $update;
    }
}
