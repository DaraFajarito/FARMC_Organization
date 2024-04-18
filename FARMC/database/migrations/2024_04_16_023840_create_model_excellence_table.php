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
        Schema::create('model_excellence', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profileForm_id')->constrained('profile_form'); // Assuming 'profileForms' is the correct table name

            $table->string('rec_list1')->nullable();
            $table->string('rec_list2')->nullable();
            $table->string('rec_list3')->nullable();
            $table->string('rec_attach_file')->nullable();

            $table->string('award_plaq1')->nullable();
            $table->string('award_plaq1_file')->nullable();
            $table->string('award_plaq2')->nullable();
            $table->string('award_plaq2_file')->nullable();
            $table->string('award_plaq3')->nullable();
            $table->string('award_plaq3_file')->nullable();

            $table->string('award_cert1')->nullable();
            $table->string('award_cert1_file')->nullable();
            $table->string('award_cert2')->nullable();
            $table->string('award_cert2_file')->nullable();
            $table->string('award_cert3')->nullable();
            $table->string('award_cert3_file')->nullable();

            $table->string('award_proj1')->nullable();
            $table->string('award_proj1_file')->nullable();
            $table->string('award_proj2')->nullable();
            $table->string('award_proj2_file')->nullable();
            $table->string('award_proj3')->nullable();
            $table->string('award_proj3_file')->nullable();

            $table->string('award_trop1')->nullable();
            $table->string('award_trop1_file')->nullable();
            $table->string('award_trop2')->nullable();
            $table->string('award_trop2_file')->nullable();
            $table->string('award_trop3')->nullable();
            $table->string('award_trop3_file')->nullable();

            $table->tinyInteger('iec_broch')->nullable();
            $table->string('iec_broch_file')->nullable();

            $table->tinyInteger('iec_hand')->nullable();
            $table->string('iec_hand_file')->nullable();

            $table->tinyInteger('iec_pub')->nullable();
            $table->string('iec_pub_file')->nullable();

            $table->tinyInteger('iec_AVP')->nullable();
            $table->string('iec_AVP_file')->nullable();

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
        Schema::dropIfExists('model_excellence');
    }
};
