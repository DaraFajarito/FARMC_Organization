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
        Schema::create('fc_membership', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fisherfolkOrg_FC_id')->constrained('fc_gen_info');
            $table->string('common_bond')->nullable();
            $table->string('CoM_NRMem_male')->nullable();
            $table->string('NRMem_female')->nullable();
            $table->string('NRMem_total')->nullable();


            $table->string('CoM_NAMem_male')->nullable();
            $table->string('NAMem_female')->nullable();
            $table->string('NAMem_total')->nullable();

            $table->string('CoM_TotalMem_male')->nullable();
            $table->string('TMem_female')->nullable();
            $table->string('TMem_total')->nullable();

            $table->string('CoM_TargetMem_male')->nullable();
            $table->string('TarMem_female')->nullable();
            $table->string('TarMem_total')->nullable();

            $table->string('CoM_Total_male')->nullable();
            $table->string('Total_female')->nullable();
            $table->string('Total_total')->nullable();


            $table->string('NoE_Fulltime_male')->nullable();
            $table->string('Fulltime_female')->nullable();
            $table->string('Fulltime_total')->nullable();

            $table->string('NoE_Parttime_male')->nullable();
            $table->string('Parttime_female')->nullable();
            $table->string('Parttime_total')->nullable();

            $table->string('NoE_Total_male')->nullable();
            $table->string('TotalEmp_female')->nullable();
            $table->string('TotalEmp_total')->nullable();

            $table->string('total_assets')->nullable();
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
        Schema::dropIfExists('fc__membership');
    }
};
