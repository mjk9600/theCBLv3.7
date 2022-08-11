<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
      
            $table->bigIncrements('playerId')->nullable(false);
            $table->string('fname')->nullable(false);
            $table->string('mname');
            $table->string('lname')->nullable(false);
            $table->string('whatsapp_num',10)->nullable(false);
            $table->string('alt_num',10);
            $table->string('email');
            $table->date('dateOfBirth')->nullable(false);
            $table->string('gender')->nullable(false);
            $table->integer('pincode')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('state')->nullable(false);
            $table->string('country')->nullable(false);
            $table->integer('height')->nullable(false);
            $table->integer('weight')->nullable(false);
            $table->string('position')->nullable(false);
            $table->string('level')->nullable(false);
            $table->string('document')->nullable(false);
            $table->integer('jersy')->nullable(false);
            $table->string('experiance')->nullable(false);
            $table->string('termId')->nullable(false);
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
        Schema::dropIfExists('players');
    }
};
