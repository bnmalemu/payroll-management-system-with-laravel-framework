<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AddEmployee;
use App\Models\Payroll;
use App\Models\Payroll\AddPayroll;
use App\Models\Payroll\AddBudget;

class AddPayrollController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_payroll(Request $request)
    {
        $payrolls = DB::table('add_payrolls')->orderBy('payroll_month', 'desc')->get();
        return view('payroll.payroll.payroll', compact('payrolls'));
    }
    public function load_payroll($id)
    {
        $payroll = AddPayroll::find($id);
        return response()->json([
            'status'=>200,
            'payroll'=>$payroll,
        ]);
    }
    public function add_payroll(Request $request)
    {
        $add_payroll = new AddPayroll;
        $add_payroll->payroll_month = $request->start_month;
        $add_payroll->save();
        //return back()->with('message', 'New Payroll Added Successfully');
        return back()->with('message', 'New Payroll Added Successfully');
    }
}
