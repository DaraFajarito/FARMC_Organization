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
        Schema::create('fc_list_of_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fisherfolkOrg_FC_id')->constrained('fc_gen_info');
            $table->string('listmem_name')->nullable();
            $table->string('listmem_type')->nullable();
            $table->string('listmem_cs')->nullable();
            $table->string('listmem_gen')->nullable();
            $table->date('listmem_birth')->nullable();
            $table->string('listmem_age')->nullable();
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
        Schema::dropIfExists('fc_list_of_members');
    }
};



