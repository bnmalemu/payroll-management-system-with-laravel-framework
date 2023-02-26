<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_employees', function (Blueprint $table) {
            $table->id();
            $table->string('c_code');
            $table->string('c_name');
            $table->string('d_code');
            $table->string('d_name');
            $table->string('id_no')->unique();
            $table->string('f_name');
            $table->string('m_name');
            $table->string('l_name');
            $table->string('acc_no')->unique();
            $table->string('b_sala');
            $table->string('an_sala');
            $table->string('pos_sala');
            $table->string('hou_sala');
            $table->string('poc_sala');
            $table->string('mob_card');
            $table->string('transp');
            $table->string('muy_sala');
            $table->string('non_tax');
            $table->string('ma_murti');
            $table->string('kitat');
            $table->string('help');
            $table->string('pp_deb');
            $table->string('pp_oro');
            $table->string('status')->default(1);
            $table->string('reason')->nullable();
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
        Schema::dropIfExists('add_employees');
    }
}
