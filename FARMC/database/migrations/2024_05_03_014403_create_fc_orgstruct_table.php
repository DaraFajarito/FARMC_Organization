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
        Schema::create('fc_orgstruct', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fisherfolkOrg_FC_id')->constrained('fc_gen_info');
            $table->string('orgstruct_file')->nullable();
            $table->string('CD_name')->nullable();
            $table->string('CD_design')->nullable();
            $table->string('CD_tell')->nullable();
            $table->string('CD_email')->nullable();
            $table->string('CD_FBacc')->nullable();

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
        Schema::dropIfExists('fc_orgstruct');
    }
};
