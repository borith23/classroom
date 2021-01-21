<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trophy extends Model
{
    // public function players()
    // {
    // return $this->belongsToMany(
    //         Player::class,
    //         'trophies_players',
    //         'trophy_id',
    //         'player_id');
    // } 

    public function players(){
        return $this->belongToMany(Player::class);
    }
    
}
