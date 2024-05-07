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
        Schema::create('fc_gen_info', function (Blueprint $table) {
            $table->id();
            $table->string('as_of')->nullable();
            $table->string('name_of_coop')->nullable();
            $table->string('add_barangay')->nullable();
            $table->string('add_city')->nullable();
            $table->string('add_province')->nullable();
            $table->string('sector_rep')->nullable();
            $table->string('sector_rep_yes')->nullable();
            $table->string('CIN')->nullable();
            $table->date('date_of_amend')->nullable();
            $table->text('short_history')->nullable();

            $table->string('RD_ODR_regnum')->nullable();
            $table->date('RD_ODR_regdate')->nullable();
            $table->string('RD_ODR_regfile')->nullable();

            $table->string('RD_RA_regnum')->nullable();
            $table->date('RD_RA_regdate')->nullable();
            $table->string('RD_RA_regfile')->nullable();

            $table->string('RD_memOp')->nullable();
            $table->string('RD_bussOp')->nullable();
            $table->string('RD_categofCoop')->nullable();
            $table->string('RD_typeofCoop')->nullable();

            $table->text('RD_genObj')->nullable();
            $table->text('RD_progpas')->nullable();
            $table->date('RD_SOA_date')->nullable();
            $table->string('RD_SOA_num')->nullable();
            $table->text('RD_categofAccre')->nullable();
            $table->string('cooperative')->default('COOPERATIVE');
            $table->string('status')->nullable();

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
        Schema::dropIfExists('fc_gen_info');
    }
};
