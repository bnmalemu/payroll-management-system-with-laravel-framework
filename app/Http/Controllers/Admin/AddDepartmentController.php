<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AddCollege;
use App\Models\AddDepartment;
class AddDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colleges = DB::table('add_colleges')->get();
        $depts = DB::table('add_departments')->orderBy('c_name')->orderBy('d_name')->get();
        return view('admin.add_department.create', compact('colleges', 'depts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $register_department = new AddDepartment;
        $c_code1 = $request->input('c_code');
        $c_codes = AddCollege::get();
        foreach ($c_codes as $key => $c_code2) {
            $cur_code = $c_code2->c_code;
            if($c_code1 == $cur_code)
            {
                $cur_name = $c_code2->c_name;
            }
        }
        $register_department->c_code = $c_code1;
        $register_department->c_name = $cur_name;
        $register_department->d_code = $request->input('dept_code');
        $register_department->d_name = $request->input('dept_name');

        $register_department->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
