<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegeFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_finances', function (Blueprint $table) {
            $table->id();
            $table->string('college_code');
            $table->string('organization_name');
            $table->string('program');
            $table->string('project_code');
            $table->string('employee_name');
            $table->string('employee_payment');
            $table->string('abell_reason');
            $table->string('initial_address');
            $table->string('final_address');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('total_date');
            $table->string('perdiem_payment');
            $table->string('nedaj_payment');
            $table->string('transport_payment');
            $table->string('reserve_payment');
            $table->string('total_payed_birr');
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
        Schema::dropIfExists('college_finances');
    }
}
