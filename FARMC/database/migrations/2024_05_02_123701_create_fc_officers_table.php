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
        Schema::create('fc_officers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fisherfolkOrg_FC_id')->constrained('fc_gen_info');
            $table->text('BoardofDir_name1')->nullable();
            $table->string('cs1')->nullable();
            $table->string('gen1')->nullable();
            $table->string('birth1')->nullable();
            $table->string('age1')->nullable();


            $table->text('Chairperson_name2')->nullable();
            $table->string('cs2')->nullable();
            $table->string('gen2')->nullable();
            $table->string('birth2')->nullable();
            $table->string('age2')->nullable();


            $table->text('Vchair_name3')->nullable();
            $table->string('cs3')->nullable();
            $table->string('gen3')->nullable();
            $table->string('birth3')->nullable();
            $table->string('age3')->nullable();

            $table->text('BM_name4')->nullable();
            $table->string('cs4')->nullable();
            $table->string('gen4')->nullable();
            $table->string('birth4')->nullable();
            $table->string('age4')->nullable();

            $table->text('BM_name5')->nullable();
            $table->string('cs5')->nullable();
            $table->string('gen5')->nullable();
            $table->string('birth5')->nullable();
            $table->string('age5')->nullable();


            $table->text('BM_name6')->nullable();
            $table->string('cs6')->nullable();
            $table->string('gen6')->nullable();
            $table->string('birth6')->nullable();
            $table->string('age6')->nullable();

            $table->text('BM_name7')->nullable();
            $table->string('cs7')->nullable();
            $table->string('gen7')->nullable();
            $table->string('birth7')->nullable();
            $table->string('age7')->nullable();

            $table->text('BM_name8')->nullable();
            $table->string('cs8')->nullable();
            $table->string('gen8')->nullable();
            $table->string('birth8')->nullable();
            $table->string('age8')->nullable();

            $table->text('BM_name9')->nullable();
            $table->string('cs9')->nullable();
            $table->string('gen9')->nullable();
            $table->string('birth9')->nullable();
            $table->string('age9')->nullable();

            $table->text('BM_name10')->nullable();
            $table->string('cs10')->nullable();
            $table->string('gen10')->nullable();
            $table->string('birth10')->nullable();
            $table->string('age10')->nullable();

            $table->text('GenMan_name11')->nullable();
            $table->string('cs11')->nullable();
            $table->string('gen11')->nullable();
            $table->string('birth11')->nullable();
            $table->string('age11')->nullable();

            $table->text('Sec_name12')->nullable();
            $table->string('cs12')->nullable();
            $table->string('gen12')->nullable();
            $table->string('birth12')->nullable();
            $table->string('age12')->nullable();

            $table->text('Treas_name13')->nullable();
            $table->string('cs13')->nullable();
            $table->string('gen13')->nullable();
            $table->string('birth13')->nullable();
            $table->string('age13')->nullable();

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
        Schema::dropIfExists('fc_officers');
    }
};
