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
        Schema::create('fisherfolk_rep', function (Blueprint $table) {
            $table->id();
            $table->foreignkey('profileForm_id');
            $table->string('category');
            $table->string('name');
            $table->boolean('endorsement_fisherfolk'); // false default
            $table->string('endorsement_attachment'); // file
            $table->boolean('atleast_one_year'); // false default
            $table->string('aoy_attachment'); // file
            $table->boolean('source_of_income'); // false default
            $table->string('soi_attachment'); // file
            $table->boolean('good_moral'); // false default
            $table->string('gmc_attachment'); // file
            $table->string('org_name'); 
            $table->date('date_of_reg'); 
            $table->date('date_of_accreditation'); 
            $table->boolean('dor_file'); 
            $table->boolean('doa_file'); 
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
        Schema::dropIfExists('fisherfolk_rep');
    }
};
