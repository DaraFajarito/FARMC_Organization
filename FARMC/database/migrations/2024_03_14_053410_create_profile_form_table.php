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
        Schema::create('profile_form', function (Blueprint $table) {
            $table->id();
            $table->string('municipality')->nullable();
            $table->string('province')->nullable();
            $table->date('date_organized')->nullable();
            $table->string('minutes1')->nullable(); // Assuming these are file paths
            $table->string('photos1')->nullable(); // Assuming these are file paths
            $table->string('attendance1')->nullable(); // Assuming these are file paths
            $table->date('date_reorganized')->nullable();
            $table->string('minutes2')->nullable(); // Assuming these are file paths
            $table->string('photos2')->nullable(); // Assuming these are file paths
            $table->string('attendance2')->nullable(); // Assuming these are file paths
            $table->tinyInteger('internalP')->nullable();
            $table->string('internalP_file')->nullable(); // Assuming these are file paths
            $table->tinyInteger('fisherfolkR')->nullable();
            $table->string('fisherfolkR_file')->nullable(); // Assuming these are file paths
            $table->tinyInteger('fisheriesP')->nullable();
            $table->string('fisheriesP_file')->nullable(); // Assuming these are file paths
            $table->tinyInteger('formulationR')->nullable();
            $table->string('formulationR_file')->nullable(); // Assuming these are file paths

            //FARMC officers
            $table->string('chairperson')->nullable();
            $table->string('vice_chairperson')->nullable();
            $table->string('secretary')->nullable();
            $table->string('asst_sec')->nullable();
            $table->string('treasurer')->nullable();
            $table->string('asst_treas')->nullable();
            $table->string('auditor')->nullable();
            $table->string('asst_aud')->nullable();
            $table->string('pro1')->nullable();
            $table->string('pro2')->nullable();
            $table->string('sgt_arms1')->nullable();
            $table->string('sgt_arms2')->nullable();
            $table->string('sgt_arms3')->nullable();

            //mandated members
            $table->string('chairpersonSB')->nullable();
            $table->string('mpdo')->nullable();
            $table->string('repmdc')->nullable();
            $table->string('repda')->nullable();
            $table->string('repngo')->nullable();
            $table->string('repps')->nullable();
            $table->string('others')->nullable();

            //secretariat
            $table->string('name_sec')->nullable();
            $table->string('name_sec1')->nullable();
            $table->string('name_sec2')->nullable();
            $table->string('office_org')->nullable();
            $table->string('office_org1')->nullable();
            $table->string('office_org2')->nullable();
            $table->string('status')->nullable();
            $table->string('level')->nullable();
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
        Schema::dropIfExists('profile_form');
    }
};
