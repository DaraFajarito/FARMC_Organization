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
        Schema::create('sustainability_mechanism', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profileForm_id')->constrained('profile_form'); // Assuming 'profileForms' is the correct table name

            $table->string('data_training')->nullable();
            $table->string('data_fishcatch')->nullable();
            $table->string('data_regforms')->nullable();
            $table->string('est_funds')->nullable();
            $table->string('est_funds_file')->nullable();
            $table->string('othersources1')->nullable();
            $table->string('othersources1_file')->nullable();
            $table->string('othersources2')->nullable();
            $table->string('othersources2_file')->nullable();
            $table->string('othersources3')->nullable();
            $table->string('othersources3_file')->nullable();
            $table->string('status')->nullable();
            $table->string('level')->nullable();

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
        Schema::dropIfExists('sustainability_mechanism');
    }
};
