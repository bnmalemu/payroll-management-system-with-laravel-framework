<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddEmployee extends Model
{
    use HasFactory;

    protected $table = 'add_employees';

    protected $primaryKey = 'id';

    protected $fillable = [
        'c_code',
        'c_name',
        'd_code',
        'd_name',
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
        'ma_murti',
        'kitat',
        'help',
        'pp_deb',
        'pp_oro',
        'status',
        'reason',
    ];
}
