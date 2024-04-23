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
        Schema::create('farmc_membership', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('landline_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('age')->nullable();
            $table->string('birthplace_municipality')->nullable();
            $table->string('birthplace_province')->nullable();
            $table->string('4ps')->nullable();
            $table->string('pwd')->nullable();
            $table->string('IP')->nullable();
            $table->string('name_spouse')->nullable();
            $table->string('occupation')->nullable();
            $table->string('religion')->nullable();
            $table->string('dependent_male')->nullable();
            $table->string('dependent_female')->nullable();
            $table->string('dependent_others')->nullable();
            $table->string('educational_attainment')->nullable();
            $table->string('tertiary')->nullable();
            $table->string('tesda')->nullable();
            $table->string('other_source')->nullable();

            ///////////////////////////

            $table->string('farmc_name')->nullable();
            $table->string('farmc_add')->nullable();
            $table->string('mfarmc_off')->nullable();
            $table->string('inc_officer2')->nullable();
            $table->string('inc_member1')->nullable();
            $table->string('inc_member2')->nullable();
            $table->string('farmc_rep')->nullable();
            $table->string('sect')->nullable();
            $table->string('LGU_rep')->nullable();

            ///////////////////////////

            $table->string('org_mem_name')->nullable();
            $table->string('add_acc')->nullable();
            $table->string('comp_mem')->nullable();
            $table->string('reg_ass')->nullable();
            $table->string('lgu_accre')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('date')->nullable();
            $table->string('officer_ass')->nullable();
            $table->string('position')->nullable();
            $table->string('involvement_mdo')->nullable();
            $table->string('year_el')->nullable();
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
        Schema::dropIfExists('farmc_membership');
    }
};
