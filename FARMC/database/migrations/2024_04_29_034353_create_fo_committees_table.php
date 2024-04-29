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
        Schema::create('fo_committees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fisherfolkOrg_id')->constrained('fisherfolk_municipal_ass');
            $table->string('category')->nullable();
            $table->string('name')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            $table->string('age')->nullable();
            $table->string('fourps')->nullable();
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
        Schema::dropIfExists('fo_committees');

    }
};
