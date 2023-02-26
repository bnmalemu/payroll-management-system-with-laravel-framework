<?php

namespace App\Models\Payroll;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayrollImage extends Model
{
    use HasFactory;

    protected $table = 'payroll_images';

    protected $primaryKey = 'id';

    protected $fillable = [
        'month',
        'id_no',
        'f_name',
        'm_name',
        'l_name',
        'acc_no',
        'b_sala',
        'an_sala',
        'pos_sala',
        'hou_sala',
        'poc_sala',
        'mob_card',
        'transp',
        'muy_sala',
        'non_tax',
        'tot_pay',
        'tot_cred',
        'work_tax',
        'pension',
        'tea_asso',
        'ma_murti',
        'kitat',
        'help',
        'pp_deb',
        'pp_oro',
        'tot_debit',
        'emp_credit',

    ];
}
