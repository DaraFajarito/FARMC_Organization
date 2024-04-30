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
        Schema::create('fo_list_of_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fisherfolkOrg_id')->constrained('fisherfolk_municipal_ass');
            $table->string('mem_name')->nullable();
            $table->string('mem_cs')->nullable();
            $table->string('mem_gen')->nullable();
            $table->date('mem_birth')->nullable();
            $table->string('mem_age')->nullable();
            $table->string('mem_fourps')->nullable();
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
        Schema::dropIfExists('fo_list_of_members');
    }
};
