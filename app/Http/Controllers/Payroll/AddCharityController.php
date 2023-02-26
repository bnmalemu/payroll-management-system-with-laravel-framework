<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Payroll\AddCharity;

class AddCharityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_charity(Request $request)
    {
        $charities = DB::table('add_charities')->get();
        return view('payroll.charity.charity', compact('charities'));
    }
    public function add_charity(Request $request)
    {
        $add_charity = new AddCharity;
        $add_charity->charity_year = $request->charity_year;
        $add_charity->charity_reason = $request->charity_reason;
        $add_charity->charity_code = $request->charity_code;
        $add_charity->charity_amount = $request->charity_amount;
        $add_charity->save();
        return back();
    }
}
