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
            $table->string('other_cat')->nullable();
            $table->string('name')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->string('age')->nullable();
            $table->string('fourps')->nullable();

            $table->string('name1')->nullable();
            $table->string('civil_status1')->nullable();
            $table->string('gender1')->nullable();
            $table->date('birthday1')->nullable();
            $table->string('age1')->nullable();
            $table->string('fourps1')->nullable();

            $table->string('name2')->nullable();
            $table->string('civil_status2')->nullable();
            $table->string('gender2')->nullable();
            $table->date('birthday2')->nullable();
            $table->string('age2')->nullable();
            $table->string('fourps2')->nullable();
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
