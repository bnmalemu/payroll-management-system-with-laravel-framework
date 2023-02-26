<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrollImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll_images', function (Blueprint $table) {
            $table->id();
            $table->string('month');
            $table->string('id_no');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('l_name');
            $table->string('acc_no');
            $table->string('b_sala');
            $table->string('an_sala');
            $table->string('pos_sala');
            $table->string('hou_sala');
            $table->string('poc_sala');
            $table->string('mob_card');
            $table->string('transp');
            $table->string('muy_sala');
            $table->string('non_tax');
            $table->string('tot_pay');
            $table->string('tot_cred');
            $table->string('work_tax');
            $table->string('pension');
            $table->string('tea_asso');
            $table->string('ma_murti');
            $table->string('kitat');
            $table->string('help');
            $table->string('pp_deb');
            $table->string('pp_oro');
            $table->string('tot_debit');
            $table->string('emp_credit');
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
        Schema::dropIfExists('payroll_images');
    }
}
