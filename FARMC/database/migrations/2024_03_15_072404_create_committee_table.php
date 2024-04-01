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
        Schema::create('committee', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profileForm_id')->constrained('profile_form');
            $table->string('category')->nullable();
            $table->string('chairperson_name')->nullable();
            $table->string('chairperson_org')->nullable();
            $table->string('sec_name')->nullable();
            $table->string('sec_org')->nullable();
            $table->string('member_name')->nullable();
            $table->string('member_org')->nullable();
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
        Schema::dropIfExists('committee');
    }
};
