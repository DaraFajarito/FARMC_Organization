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
            $table->foreignId('profileForm_id')->constrained('profile_form'); // Assuming 'profileForms' is the correct table name
            $table->string('category')->nullable();
            $table->string('name')->nullable();
            $table->boolean('endorsement_fisherfolk')->default(false);
            $table->string('endorsement_attachment')->nullable(); // file
            $table->boolean('atleast_one_year')->default(false);
            $table->string('aoy_attachment')->nullable(); // file
            $table->boolean('source_of_income')->default(false);
            $table->string('soi_attachment')->nullable(); // file
            $table->boolean('good_moral')->default(false);
            $table->string('gmc_attachment')->nullable(); // file
            $table->string('org_name')->nullable();
            $table->date('date_of_reg')->nullable();
            $table->date('date_of_accreditation')->nullable();
            $table->boolean('dor_file')->nullable();
            $table->boolean('doa_file')->nullable();
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
