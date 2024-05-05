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
        Schema::create('fisherfolk_municipal_ass', function (Blueprint $table) {
            $table->id();
            $table->text('as_of')->nullable();
            $table->text('name_of_org')->nullable();
            $table->text('add_barangay')->nullable();
            $table->text('add_city')->nullable();
            $table->text('add_province')->nullable();
            $table->text('sector_rep')->nullable();
            $table->text('sector_rep_yes')->nullable();
            $table->text('status_of_reg')->nullable();
            $table->text('status_of_reg_yes')->nullable();
            $table->text('reg_no')->nullable();
            $table->text('date_reg')->nullable();
            $table->text('status_of_accre')->nullable();
            $table->text('status_of_accre_yes')->nullable();
            $table->text('accre_no')->nullable();
            $table->text('date_accre')->nullable();

            $table->string('OAM_EO_Chair_name')->nullable();
            $table->string('chair_cs')->nullable();
            $table->string('chair_gen')->nullable();
            $table->date('chair_birth')->nullable();
            $table->string('chair_age')->nullable();
            $table->string('chair_fourps')->nullable();

            $table->string('OAM_EO_Vicechair_name')->nullable();
            $table->string('vicechair_cs')->nullable();
            $table->string('vicechair_gen')->nullable();
            $table->date('vicechair_birth')->nullable();
            $table->string('vicechair_age')->nullable();
            $table->string('vicechair_fourps')->nullable();

            $table->string('OAM_EO_Sec_name')->nullable();
            $table->string('sec_cs')->nullable();
            $table->string('sec_gen')->nullable();
            $table->date('sec_birth')->nullable();
            $table->string('sec_age')->nullable();
            $table->string('sec_fourps')->nullable();

            $table->string('OAM_EO_Treas_name')->nullable();
            $table->string('treas_cs')->nullable();
            $table->string('treas_gen')->nullable();
            $table->date('treas_birth')->nullable();
            $table->string('treas_age')->nullable();
            $table->string('treas_fourps')->nullable();

            $table->string('OAM_EO_Aud_name')->nullable();
            $table->string('aud_cs')->nullable();
            $table->string('aud_gen')->nullable();
            $table->date('aud_birth')->nullable();
            $table->string('aud_age')->nullable();
            $table->string('aud_fourps')->nullable();

            $table->string('OAM_EO_PRO_name')->nullable();
            $table->string('pro_cs')->nullable();
            $table->string('pro_gen')->nullable();
            $table->date('pro_birth')->nullable();
            $table->string('pro_age')->nullable();
            $table->string('pro_fourps')->nullable();

            $table->string('OAM_EO_Sgt_name')->nullable();
            $table->string('sgt_cs')->nullable();
            $table->string('sgt_gen')->nullable();
            $table->date('sgt_birth')->nullable();
            $table->string('sgt_age')->nullable();
            $table->string('sgt_fourps')->nullable();

            $table->string('OAM_EO_Other_name')->nullable();
            $table->string('other_cs')->nullable();
            $table->string('other_gen')->nullable();
            $table->date('other_birth')->nullable();
            $table->string('other_age')->nullable();
            $table->string('other_fourps')->nullable();

            $table->string('capmem_fee')->nullable();
            $table->string('capmonthly_cont')->nullable();
            $table->string('cap_donation')->nullable();
            $table->string('cap_others')->nullable();
            $table->string('captotal_cap')->nullable();

            $table->string('CIcontact_person')->nullable();
            $table->string('CIlandline')->nullable();
            $table->string('CIMobile')->nullable();
            $table->string('CIMess')->nullable();
            $table->string('association')->default('ASSOCIATION');
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
        Schema::dropIfExists('fisherfolk_municipal_ass');
    }
};
