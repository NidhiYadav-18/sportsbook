<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agent_id');
            $table->string('username');
            $table->string('password');
            $table->string('url');
            $table->string('IP');
            $table->string('credits');
            $table->decimal('max_win', 10, 2); // Assuming max_win is a decimal value with precision 10 and scale 2
            $table->decimal('max_bet', 10, 2); // Assuming max_bet is a decimal value with precision 10 and scale 2
            $table->tinyInteger('account_status')->length(1);
            $table->rememberToken();
            $table->timestamps();

            // Foreign key constraint for agent_id referencing id on agents table
            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
