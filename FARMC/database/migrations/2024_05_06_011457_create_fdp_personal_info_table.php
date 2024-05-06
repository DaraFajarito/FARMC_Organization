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
        Schema::create('fdp_personal_info', function (Blueprint $table) {
            $table->id();
            $table->string('fam_name')->nullable();
            $table->string('given_name')->nullable();
            $table->string('mid_name')->nullable();
            $table->string('ext')->nullable();
            $table->string('add_barangay')->nullable();
            $table->string('add_city')->nullable();
            $table->string('add_province')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('age')->nullable();
            $table->string('fourps')->nullable();
            $table->string('cul_af')->nullable();
            $table->string('cul_af_yes')->nullable();
            $table->string('birthplace_municipality')->nullable();
            $table->string('birthplace_province')->nullable();
            $table->string('name_spouse')->nullable();
            $table->string('occupation')->nullable();
            $table->string('dependent_male')->nullable();
            $table->string('dependent_female')->nullable();
            $table->string('dependent_others')->nullable();
            $table->string('educational_attainment')->nullable();
            $table->string('tertiary')->nullable();
            $table->string('tesda')->nullable();
            $table->string('others')->nullable();
            $table->string('name_ass')->nullable();
            $table->string('add_ass')->nullable();
            $table->string('officer_ass')->nullable();
            $table->string('officer_ass_yes')->nullable();
            $table->string('reg_agency')->nullable();
            $table->string('reg_agency_others')->nullable();
            $table->string('reg_info_no')->nullable();
            $table->string('reg_info_date')->nullable();
            $table->string('comp_mem')->nullable();
            $table->string('comp_mem_others')->nullable();
            $table->string('type_of_org')->nullable();
            $table->string('name_FARMC')->nullable();
            $table->string('add_FARMC')->nullable();
            $table->string('officer_MFARMC')->nullable();
            $table->string('officer_MFARMC_yes')->nullable();
            $table->string('as_member')->nullable();
            $table->string('as_officer')->nullable();
            $table->string('sector_rep')->nullable();
            $table->string('sector_rep_others')->nullable();
            $table->string('involvement_mdo')->nullable();
            $table->string('year1')->nullable();
            $table->string('year2')->nullable();
            $table->string('year3')->nullable();
            $table->string('year4')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('fdp_personal_info');
    }
};
