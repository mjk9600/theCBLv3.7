<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->bigIncrements('tournamentId')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('email');
            $table->string('mobileNumber',10)->nullable(false);
            $table->string('logo')->nullable(false);
         //   $table->string('path');     
            $table->string('tournament_name')->nullable(false);
            $table->string('tournament_location')->nullable(false);
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable(false);
            $table->string('tournamentCategory')->nullable(false);
            $table->string('tournamentType')->nullable(false);
            $table->integer('ageRestriction')->nullable(false);
            $table->integer('ageCutOff')->nullable(false);
            $table->string('aboutTournament')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournaments');
    }
}
