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
        Schema::create('basic_function', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profileForm_id')->constrained('profile_form'); // Assuming 'profileForms' is the correct table name
            $table->string('mfdp')->nullable();
            $table->string('copy1_file')->nullable();
            $table->string('mindoc1_file')->nullable();
            $table->string('mfo')->nullable();
            $table->string('copy2_file')->nullable();
            $table->string('mindoc2_file')->nullable();
            $table->tinyInteger('bantaydt')->nullable();
            $table->string('bantaydt_file')->nullable();
            $table->tinyInteger('actfarmcbt')->nullable();
            $table->string('actfarmcbt_file')->nullable();
            $table->tinyInteger('appfarmcbt')->nullable();
            $table->string('appfarmcbt_file')->nullable();
            $table->tinyInteger('caseestablished')->nullable();
            $table->string('caseestablished_file')->nullable();
            $table->string('mfarmcoffice')->nullable();
            $table->string('copy3_file')->nullable();
            $table->string('regmeet')->nullable();
            $table->string('minatt_file')->nullable();
            $table->string('photodoc_file')->nullable();
            $table->string('status')->nullable();
            $table->string('level')->default('LEVEL TWO')->nullable();
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
        Schema::dropIfExists('basic_function');
    }
};
