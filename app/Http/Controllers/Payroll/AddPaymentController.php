<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Payroll;

class AddPaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_payment(Request $request)
    {
        $payments = DB::table('payrolls')->orderBy('month')
                                         ->orderBy('f_name')
                                         ->orderBy('m_name')
                                         ->orderBy('l_name')
                                         ->orderBy('acc_no')
                                         ->get();
        return view('payroll.payment.payment', compact('payments'));
    }
/*
    public function info_payment($id)
    {
        $main = Payroll::find($id);
        return response()->json([
            'status'=>200,
            'main'=>$main,
        ]);
    }
*/
}
