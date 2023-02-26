<?php

namespace App\Models\Payroll;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddPayroll extends Model
{
    use HasFactory;

    protected $table = 'add_payrolls';

    protected $primaryKey = 'id';

    protected $fillable = [
        'payroll_month',
        'payroll_status',
    ];
}
