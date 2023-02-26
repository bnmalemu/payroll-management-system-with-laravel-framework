<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\AddCollege;
use App\Models\AddDepartment;
use App\Models\AddEmployee;

class AddEmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_employee(Request $request)
    {
        $colls = DB::table('add_colleges')->get();
        $depts = DB::table('add_departments')->get();
        $employees = DB::table('add_employees')->orderBy('c_name')
                                               ->orderBy('d_name')
                                               ->orderBy('f_name')
                                               ->orderBy('m_name')
                                               ->orderBy('l_name')
                                               ->orderBy('acc_no')
                                               ->get();
        return view('payroll.employee.employee', compact('employees', 'colls', 'depts'));
    }
    public function add_employee(Request $request)
    {
        $coll_code = $request->c_code;
        $dept_code = $request->d_code;
        $colls = AddCollege::get();
        $depts = AddDepartment::get();
        foreach ($colls as $key => $coll) 
        {
            $cur_coll = $coll->c_code;
            if($cur_coll == $coll_code)
            {
                $coll_name = $coll->c_name;
            }
        }
        foreach ($depts as $key => $dept) 
        {
            $cur_dept = $dept->d_code;
            if($cur_dept == $dept_code)
            {
                $dept_name = $dept->d_name;
            }
        }
        $addemp = new AddEmployee;
        $addemp->c_code = $coll_code;
        $addemp->c_name = $coll_name;
        $addemp->d_code = $dept_code;
        $addemp->d_name = $dept_name;
        $addemp->id_no = $request->id_no;
        $addemp->f_name = $request->f_name;
        $addemp->m_name = $request->m_name;
        $addemp->l_name = $request->l_name;
        $addemp->acc_no = $request->acc_no;
        $addemp->b_sala = $request->b_sala;
        $addemp->an_sala = $request->an_sala;
        $addemp->pos_sala = $request->pos_sala;
        $addemp->hou_sala = $request->hou_sala;
        $addemp->poc_sala = $request->poc_sala;
        $addemp->mob_card = $request->mob_card;
        $addemp->transp = $request->transp;
        $addemp->muy_sala = $request->muy_sala;
        $addemp->non_tax = $request->non_tax;
        $addemp->ma_murti = $request->ma_murti;
        $addemp->kitat = $request->kitat;
        $addemp->help = $request->help;
        $addemp->pp_deb = $request->pp_deb;
        $addemp->pp_oro = $request->pp_oro;

        $addemp->save();

        return back();
    }
    public function update_employee(Request $request)
    {
        $coll_code = $request->coll;
        $dept_code = $request->dept;
        $colls = AddCollege::get();
        $depts = AddDepartment::get();
        foreach ($colls as $key => $coll) 
        {
            $cur_coll = $coll->c_code;
            if($cur_coll == $coll_code)
            {
                $coll_name = $coll->c_name;
            }
        }
        foreach ($depts as $key => $dept) 
        {
            $cur_dept = $dept->d_code;
            if($cur_dept == $dept_code)
            {
                $dept_name = $dept->d_name;
            }
        }
        $edit_id = $request->edit_id;
        $upd_employee = AddEmployee::find($edit_id);
        $upd_employee->c_code = $coll_code;
        $upd_employee->c_name = $coll_name;
        $upd_employee->d_code = $dept_code;
        $upd_employee->d_name = $dept_name;
        $upd_employee->id_no = $request->empid;
        $upd_employee->f_name = $request->fi_name;
        $upd_employee->m_name = $request->mi_name;
        $upd_employee->l_name = $request->la_name;
        $upd_employee->acc_no = $request->accno;
        $upd_employee->b_sala = $request->bsalary;
        $upd_employee->an_sala = $request->ansalary;
        $upd_employee->pos_sala = $request->psalary;
        $upd_employee->hou_sala = $request->hsalary;
        $upd_employee->poc_sala = $request->posalary;
        $upd_employee->mob_card = $request->mcard;
        $upd_employee->transp = $request->trans;
        $upd_employee->muy_sala = $request->muya;
        $upd_employee->non_tax = $request->nontax;
        $upd_employee->ma_murti = $request->mmurti;
        $upd_employee->kitat = $request->kitats;
        $upd_employee->help = $request->helps;
        $upd_employee->pp_deb = $request->ppdeb;
        $upd_employee->pp_oro = $request->pporo;
        $upd_employee->update();
        return back();
    }
    public function deactivate_employee(Request $request)
    {
        $emp_id = $request->deactive_id;
        $deactive_emp = AddEmployee::find($emp_id);
        $deactive_emp->status = $request->de_active;
        $deactive_emp->reason = $request->input('emp_reason');
        $deactive_emp->update();
        return back();
    }
    public function reactivate_employee(Request $request)
    {
        $emp_id = $request->reactive_id;
        $reactive_emp = AddEmployee::find($emp_id);
        $reactive_emp->status = $request->re_active;
        $reactive_emp->reason = '';
        $reactive_emp->update();
        return back();
    }
}
