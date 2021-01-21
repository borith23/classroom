<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrophiesPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trophies_players', function (Blueprint $table) {
            $table->bigIncrements('id');        
            $table->string('player_id');
            $table->foreign('player_id')
                ->references('id')
                ->on('players')->onDelete('cascade');
            $table->string('trophy_id');
            $table->foreign('trophy_id')
                ->references('id')
                ->on('trophies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trophies_players');
    }
}
