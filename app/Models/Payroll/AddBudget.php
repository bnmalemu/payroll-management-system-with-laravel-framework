<?php

namespace App\Models\Payroll;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddBudget extends Model
{
    use HasFactory;

    protected $table = 'add_budgets';

    protected $primaryKey = 'id';

    protected $fillable = [
        'budget_year',
        'budget_code',
        'budget_amount',
    ];
}
