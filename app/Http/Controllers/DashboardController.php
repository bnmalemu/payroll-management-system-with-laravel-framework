<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // admin user
        if(Auth::user()->hasRole('admin'))
        {
            return view('admin.admin_home');
        }
        elseif (Auth::user()->hasRole('budgetcontrol')) 
        {
            return view('budget.budgethome');
        }
        elseif (Auth::user()->hasRole('payroll'))
        {
            return view('payroll.payroll_home');
        }
        elseif (Auth::user()->hasRole('transport'))
        {
            return view('transport.transporthome');
        }
        elseif (Auth::user()->hasRole('perdiem'))
        {
            return view('perdiem.perdiem_home');
        }
        elseif (Auth::user()->hasRole('colldean'))
        {
            return view('perdiem.col_dean_process_request.dean_home');
        }
        elseif (Auth::user()->hasRole('accpresi'))
        {
            return view('perdiem.ac_vpres_process_request.accvpre_home');
        }
        elseif (Auth::user()->hasRole('findirec'))
        {
            return view('perdiem.fin_dir_process_request.finance_home');
        }
        elseif (Auth::user()->hasRole('fiteaman'))
        {
            return view('perdiem.fin_team_process_request.finance_team_home');
        }
        elseif (Auth::user()->hasRole('
            '))
        {
            return view('perdiem.perdiemhome');
        }
        elseif (Auth::user()->hasRole('cfinance'))
        {
            return view('perdiem.col_fin_process_request.cfinan_home');
        }
        elseif (Auth::user()->hasRole('ccashier'))
        {
            return view('perdiem.col_cash_process_request.col_casher_home');
        }
        elseif (Auth::user()->hasRole('reoffice'))
        {
            return view('perdiem.record_office_process_request.record_office_home');
        }
        elseif (Auth::user()->hasRole('user'))
        {
            return view('user.userhome');
        }
    }

}
