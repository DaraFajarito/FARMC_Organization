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
        Schema::create('fully_functional', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profileForm_id')->constrained('profile_form'); // Assuming 'profileForms' is the correct table name

            $table->string('approved_MFDP_file')->nullable();
            $table->string('imp_act1')->nullable();
            $table->string('imp_act1_file')->nullable();
            $table->string('imp_act2')->nullable();
            $table->string('imp_act2_file')->nullable();
            $table->string('imp_act3')->nullable();
            $table->string('imp_act3_file')->nullable();

            $table->string('pol_prop1')->nullable();
            $table->string('pol_prop1_file')->nullable();
            $table->string('pol_prop2')->nullable();
            $table->string('pol_prop2_file')->nullable();
            $table->string('pol_prop3')->nullable();
            $table->string('pol_prop3_file')->nullable();

            $table->string('rec_act1')->nullable();
            $table->string('rec_act1_file')->nullable();
            $table->string('rec_act2')->nullable();
            $table->string('rec_act2_file')->nullable();
            $table->string('rec_act3')->nullable();
            $table->string('rec_act3_file')->nullable();

            $table->string('rec_iss1')->nullable();
            $table->string('rec_iss1_file')->nullable();
            $table->string('rec_iss2')->nullable();
            $table->string('rec_iss2_file')->nullable();
            $table->string('rec_iss3')->nullable();
            $table->string('rec_iss3_file')->nullable();

            $table->string('part_act1')->nullable();
            $table->string('part_act1_file')->nullable();
            $table->string('part_act2')->nullable();
            $table->string('part_act2_file')->nullable();
            $table->string('part_act3')->nullable();
            $table->string('part_act3_file')->nullable();

            $table->string('part_LGU1')->nullable();
            $table->string('part_LGU1_file')->nullable();
            $table->string('part_LGU2')->nullable();
            $table->string('part_LGU2_file')->nullable();
            $table->string('part_LGU3')->nullable();
            $table->string('part_LGU3_file')->nullable();

            $table->string('name_com')->nullable();
            $table->string('sched_regmeet')->nullable();
            $table->string('sched_regmeet_file')->nullable();

            $table->string('wor_act1')->nullable();
            $table->string('wor_act1_file')->nullable();
            $table->string('wor_act2')->nullable();
            $table->string('wor_act2_file')->nullable();
            $table->string('wor_act3')->nullable();
            $table->string('wor_act3_file')->nullable();
            $table->string('status')->nullable();
            $table->string('level')->default('LEVEL THREE')->nullable();
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
        Schema::dropIfExists('fully_functional');
    }
};
