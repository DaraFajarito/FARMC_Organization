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
        Schema::create('fc_officers_commit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fisherfolkOrg_FC_id')->constrained('fc_gen_info');
            $table->string('category')->nullable();
            $table->string('other_cat')->nullable();
            $table->string('chairman_name')->nullable();
            $table->string('chair_cs')->nullable();
            $table->string('chair_gen')->nullable();
            $table->string('chair_birth')->nullable();
            $table->string('chair_age')->nullable();


            $table->text('sec_name')->nullable();
            $table->string('sec_cs')->nullable();
            $table->string('sec_gen')->nullable();
            $table->string('sec_birth')->nullable();
            $table->string('sec_age')->nullable();


            $table->text('mem_name')->nullable();
            $table->string('mem_cs')->nullable();
            $table->string('mem_gen')->nullable();
            $table->string('mem_birth')->nullable();
            $table->string('mem_age')->nullable();

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
        Schema::dropIfExists('fc_officers_commit');
    }
};
