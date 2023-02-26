<?php

namespace App\Models\Payroll;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCharity extends Model
{
    use HasFactory;

    protected $table = 'add_charities';

    protected $primaryKey = 'id';

    protected $fillable = [
        'charity_year',
        'charity_reason',
        'charity_code',
        'charity_amount',
    ];
}
