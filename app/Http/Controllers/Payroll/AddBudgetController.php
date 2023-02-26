<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Payroll\AddBudget;

class AddBudgetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_budget(Request $request)
    {
        $budgets = DB::table('add_budgets')->get();
        return view('payroll.budget.budget', compact('budgets'));
    }
    public function add_budget(Request $request)
    {
        $add_budget = new AddBudget;
        $add_budget->budget_year = $request->budget_year;
        $add_budget->budget_code = $request->budget_code;
        $add_budget->budget_amount = $request->budget_amount;
        $add_budget->save();
        return back();
    }
}
