<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddEmployee;

class EditEmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function info_employee($id)
    {
        $employee = AddEmployee::find($id);
        return response()->json([
            'status'=>200,
            'employee'=>$employee,
        ]);
    }
    public function edit_employee($id)
    {
        $employee = AddEmployee::find($id);
        return response()->json([
            'status'=>200,
            'employee'=>$employee,
        ]);
    }
    public function deactive_employee($id)
    {
        $employee = AddEmployee::find($id);
        return response()->json([
            'status'=>200,
            'employee'=>$employee,
        ]);
    }
    public function reactive_employee($id)
    {
        $employee = AddEmployee::find($id);
        return response()->json([
            'status'=>200,
            'employee'=>$employee,
        ]);
    }
}
