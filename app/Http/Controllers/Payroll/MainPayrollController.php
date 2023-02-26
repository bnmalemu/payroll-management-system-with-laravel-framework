<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Payroll\PayrollImage;

class MainPayrollController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function main_payment(Request $request)
    {
        $mains = DB::table('payroll_images')->orderBy('month', 'desc')
                                            ->orderBy('f_name')
                                            ->orderBy('m_name')
                                            ->orderBy('l_name')
                                            ->orderBy('acc_no')
                                            ->get();
        return view('payroll.main.main', compact('mains'));
    }
    public function info_payment($id)
    {
        $main = PayrollImage::find($id);
        return response()->json([
            'status'=>200,
            'main'=>$main,
        ]);
    }
}
