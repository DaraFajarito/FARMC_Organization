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
        Schema::create('fo_oam_boardofdir', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fisherfolkOrg_id')->constrained('fisherfolk_municipal_ass'); // Assuming 'profileForms' is the correct table name
            $table->string('boardofDir_name1')->nullable();
            $table->string('boardofDir_cs1')->nullable();
            $table->string('boardofDir_gen1')->nullable();
            $table->string('boardofDir_age1')->nullable();
            $table->string('boardofDir_birth1')->nullable();
            $table->string('boardofDir_fourps1')->nullable();

            $table->string('boardofDir_name2')->nullable();
            $table->string('boardofDir_cs2')->nullable();
            $table->string('boardofDir_gen2')->nullable();
            $table->string('boardofDir_age2')->nullable();
            $table->string('boardofDir_birth2')->nullable();
            $table->string('boardofDir_fourps2')->nullable();

            $table->string('boardofDir_name3')->nullable();
            $table->string('boardofDir_cs3')->nullable();
            $table->string('boardofDir_gen3')->nullable();
            $table->string('boardofDir_age3')->nullable();
            $table->string('boardofDir_birth3')->nullable();
            $table->string('boardofDir_fourps3')->nullable();

            $table->string('boardofDir_name4')->nullable();
            $table->string('boardofDir_cs4')->nullable();
            $table->string('boardofDir_gen4')->nullable();
            $table->string('boardofDir_age4')->nullable();
            $table->string('boardofDir_birth4')->nullable();
            $table->string('boardofDir_fourps4')->nullable();

            $table->string('boardofDir_name5')->nullable();
            $table->string('boardofDir_cs5')->nullable();
            $table->string('boardofDir_gen5')->nullable();
            $table->string('boardofDir_age5')->nullable();
            $table->string('boardofDir_birth5')->nullable();
            $table->string('boardofDir_fourps5')->nullable();

            $table->string('boardofDir_name6')->nullable();
            $table->string('boardofDir_cs6')->nullable();
            $table->string('boardofDir_gen6')->nullable();
            $table->string('boardofDir_age6')->nullable();
            $table->string('boardofDir_birth6')->nullable();
            $table->string('boardofDir_fourps6')->nullable();

            $table->string('boardofDir_name7')->nullable();
            $table->string('boardofDir_cs7')->nullable();
            $table->string('boardofDir_gen7')->nullable();
            $table->string('boardofDir_age7')->nullable();
            $table->string('boardofDir_birth7')->nullable();
            $table->string('boardofDir_fourps7')->nullable();

            $table->string('boardofDir_name8')->nullable();
            $table->string('boardofDir_cs8')->nullable();
            $table->string('boardofDir_gen8')->nullable();
            $table->string('boardofDir_age8')->nullable();
            $table->string('boardofDir_birth8')->nullable();
            $table->string('boardofDir_fourps8')->nullable();
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
        Schema::dropIfExists('fo_oam_boardofdir');
    }
};
