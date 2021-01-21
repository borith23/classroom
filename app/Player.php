<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    // public function trophies()
    // {
    // return $this->belongsToMany(
    //         Trop::class,
    //         'trophies_players',
    //         'player_id',
    //         'trophy_id');
    // }

    public function trophies(){
        return $this->belongToMany(Trophy::class);
    }




}
