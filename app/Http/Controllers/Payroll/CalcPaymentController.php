<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AddEmployee;
use App\Models\Payroll;
use App\Models\Payroll\AddPayroll;
use App\Models\Payroll\AddBudget;
use App\Models\Payroll\PayrollImage;

class CalcPaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
/*
    public function load_payroll($id)
    {
        $payroll = AddPayroll::find($id);
        return response()->json([
            'status'=>200,
            'payroll'=>$payroll,
        ]);
    }
*/
    public function cal_payroll(Request $request)
    {

//start of copy existing record from payroll table and paste it into payroll images

        $copy_payrolls = Payroll::get();
        foreach ($copy_payrolls as $key => $copy_payroll) 
        {
            $pre_id =  $copy_payroll->id;
            $pre_month =  $copy_payroll->month;
            $pre_idno =  $copy_payroll->id_no;
            $pre_fname =  $copy_payroll->f_name;
            $pre_mname =  $copy_payroll->m_name;
            $pre_lname =  $copy_payroll->l_name;
            $pre_accno =  $copy_payroll->acc_no;
            $pre_ba_sa =  $copy_payroll->b_sala;
            $pre_an_sa =  $copy_payroll->an_sala;
            $pre_pos_sa =  $copy_payroll->pos_sala;
            $pre_hou_sa =  $copy_payroll->hou_sala;
            $pre_poc_sa =  $copy_payroll->poc_sala;
            $pre_m_card =  $copy_payroll->mob_card;
            $pre_transp =  $copy_payroll->transp;
            $pre_muyaa =  $copy_payroll->muy_sala;
            $pre_non_tax =  $copy_payroll->non_tax;
            $pre_tot_pay =  $copy_payroll->tot_pay;
            $pre_tot_cre =  $copy_payroll->tot_cred;
            $pre_wo_tax =  $copy_payroll->work_tax;
            $pre_pension =  $copy_payroll->pension;
            $pre_tea_ass =  $copy_payroll->tea_asso;
            $pre_ma_murt =  $copy_payroll->ma_murti;
            $pre_kitat =  $copy_payroll->kitat;
            $pre_help =  $copy_payroll->help;
            $pre_pp_deb =  $copy_payroll->pp_deb;
            $pre_pp_oro =  $copy_payroll->pp_oro;
            $pre_tot_debit =  $copy_payroll->tot_debit;
            $pre_emp_cred =  $copy_payroll->emp_credit;

//start of deleting existing record from payroll table

            $remove_payment = Payroll::find($pre_id);
            $remove_payment->delete();

//end of deleting existing record from payroll table
            $cp_payroll = new PayrollImage;

            $cp_payroll->month = $pre_month;
            $cp_payroll->id_no = $pre_idno;
            $cp_payroll->f_name = $pre_fname;
            $cp_payroll->m_name = $pre_mname;
            $cp_payroll->l_name = $pre_lname;
            $cp_payroll->acc_no = $pre_accno;
            $cp_payroll->b_sala = $pre_ba_sa;
            $cp_payroll->an_sala = $pre_an_sa;
            $cp_payroll->pos_sala = $pre_pos_sa;
            $cp_payroll->hou_sala = $pre_hou_sa;
            $cp_payroll->poc_sala = $pre_poc_sa;
            $cp_payroll->mob_card = $pre_m_card;
            $cp_payroll->transp = $pre_transp;
            $cp_payroll->muy_sala = $pre_muyaa;
            $cp_payroll->non_tax = $pre_non_tax;
            $cp_payroll->tot_pay = $pre_tot_pay;
            $cp_payroll->tot_cred = $pre_tot_cre;
            $cp_payroll->work_tax = $pre_wo_tax;
            $cp_payroll->pension = $pre_pension;
            $cp_payroll->tea_asso = $pre_tea_ass;
            $cp_payroll->ma_murti = $pre_ma_murt;
            $cp_payroll->kitat = $pre_kitat;
            $cp_payroll->help = $pre_help;
            $cp_payroll->pp_deb = $pre_pp_deb;
            $cp_payroll->pp_oro = $pre_pp_oro;
            $cp_payroll->tot_debit = $pre_tot_debit;
            $cp_payroll->emp_credit = $pre_emp_cred;

            $cp_payroll->save();
        }

//end of copy existing record from payroll table and paste it into payroll images

        $budget = DB::table('add_budgets')->sum('budget_amount');
        $charity = DB::table('add_charities')->sum('charity_amount');
        $cur_month = $request->cur_month;
        $cur_id = $request->cur_id;
        $emp_status = 1;
        $payroll = AddEmployee::get();
        foreach($payroll as $my_payroll)
        {
            $status = $my_payroll->status;
            if($emp_status == $status)
            {
                $id_no = $my_payroll->id_no;
                $f_name = $my_payroll->f_name;
                $m_name = $my_payroll->m_name;
                $l_name = $my_payroll->l_name;
                $acc_no = $my_payroll->acc_no;
                $b_sala = $my_payroll->b_sala;
                $an_sala = $my_payroll->an_sala;
                $pos_sala = $my_payroll->pos_sala;
                $hou_sala = $my_payroll->hou_sala;
                $poc_sala = $my_payroll->poc_sala;
                $mob_card = $my_payroll->mob_card;
                $transp = $my_payroll->transp;
                $muy_sala = $my_payroll->muy_sala;
                $non_tax = $my_payroll->non_tax;
                $ma_murti = $my_payroll->ma_murti;
                $kitat = $my_payroll->kitat;
                $help = $my_payroll->help;
                $pp_deb = $my_payroll->pp_deb;
                $pp_oro = $my_payroll->pp_oro;

                //calculate if there is charity with basic salary
                if($charity == 0)
                {
                    $basic_salary = $b_sala;
                }
                else
                {
                    $basic_salary = ($b_sala - ($b_sala * ($charity/100)));
                }

                //constant value

                $pension = ($basic_salary * 0.07);
                $teach_assoc = 6.0;

                //calculate total payment here

                $total_pay = ($basic_salary + $an_sala + $pos_sala + $hou_sala + $poc_sala + $mob_card + $transp + $muy_sala + $non_tax);

                //calculate total credit without non taxable and pocket money

                $no_tax_pay = ($poc_sala + $non_tax);

                $total_cred = ($total_pay - $no_tax_pay);

                //calculate work tax

                if ($total_cred > 10900) {
                    $work_tax = (($total_cred * 0.35 ) - 1500);  
                }
                else if ($total_cred <= 10900 && $total_cred > 7800) {
                    $work_tax = (($total_cred * 0.3) - 955);  
                }
                else if ($total_cred <= 7800 && $total_cred > 5250) {
                    $work_tax = (($total_cred * 0.25) - 565);  
                }
                else if ($total_cred <= 5250 && $total_cred > 3200) {
                    $work_tax = (($total_cred * 0.2) - 302.50);  
                }
                else if ($total_cred <= 3200 && $total_cred > 1650) {
                    $work_tax = (($total_cred * 0.15) - 142.50);  
                }
                else if ($total_cred <= 1650 && $total_cred > 600) {
                    $work_tax = (($total_cred * 0.1) - 60);  
                }
                else if ($total_cred <= 600 && $total_cred >0 ) {
                    $work_tax = 0.0;  
                }
                else
                {
                    echo"wrong entry!!";
                }
                //calculate total debit

                $total_debt = ($work_tax + $pension + $teach_assoc + $ma_murti + $kitat + $help + $pp_deb + $pp_oro);

                //calculate total payment

                $credit = (($total_cred + $no_tax_pay) - $total_debt);

                $add_payment = new Payroll;

                $add_payment->month = $cur_month;
                $add_payment->id_no = $id_no;
                $add_payment->f_name = $f_name;
                $add_payment->m_name = $m_name;
                $add_payment->l_name = $l_name;
                $add_payment->acc_no = $acc_no;
                $add_payment->b_sala = $b_sala;
                $add_payment->an_sala = $an_sala;
                $add_payment->pos_sala = $pos_sala;
                $add_payment->hou_sala = $hou_sala;
                $add_payment->poc_sala = $poc_sala;
                $add_payment->mob_card = $mob_card;
                $add_payment->transp = $transp;
                $add_payment->muy_sala = $muy_sala;
                $add_payment->non_tax = $non_tax;
                $add_payment->tot_pay = $total_pay;
                $add_payment->tot_cred = $total_cred;
                $add_payment->work_tax = $work_tax;
                $add_payment->pension = $pension;
                $add_payment->tea_asso = $teach_assoc;
                $add_payment->ma_murti = $ma_murti;
                $add_payment->kitat = $kitat;
                $add_payment->help = $help;
                $add_payment->pp_deb = $pp_deb;
                $add_payment->pp_oro = $pp_oro;
                $add_payment->tot_debit = $total_debt;
                $add_payment->emp_credit = $credit;

                $add_payment->save();

            }
        }

        //calculate remaining budget
        $total_payment = DB::table('payrolls')->sum('tot_pay');
        $remain_budget = $budget - $total_payment;
        // update add budget
        $upd_add_budget = AddBudget::find(1);
        $upd_add_budget->budget_amount = $remain_budget;
        $upd_add_budget->save();
        // update add payroll status
        $upd_add_payroll = AddPayroll::find($cur_id);
        $upd_add_payroll->payroll_status = 1;
        $upd_add_payroll->save();

        return back();  
    }
    public function edit_payroll($id)
    {
        $payroll = AddPayroll::find($id);
        return response()->json([
            'status'=>200,
            'payroll'=>$payroll,
        ]);
    }
    public function update_payroll(Request $request)
    {
        $edit_id = $request->edit_id;
        $edit_month = AddPayroll::find($edit_id);
        $edit_month->payroll_month = $request->edit_month;
        $edit_month->update();
        return back();
    }
    public function delete_payroll($id)
    {
        $payroll = AddPayroll::find($id);
        return response()->json([
            'status'=>200,
            'payroll'=>$payroll,
        ]);
    }
    public function remove_payroll(Request $request)
    {
        $delete_id = $request->input('delete_id');
        $remove_payroll = AddPayroll::find($delete_id);
        $remove_payroll->delete();
        return back();
    }
}
