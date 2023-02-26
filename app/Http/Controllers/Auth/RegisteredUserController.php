<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        $users = DB::table('users')->orderBy('c_name')->orderBy('d_name')->get();
        $colleges = DB::table('add_colleges')->get();
        $departments = DB::table('add_departments')->get();
        return view('admin.add_user.register_new_user', compact('colleges', 'departments', 'users'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
     
        $get_colls = DB::table('add_colleges')->get();
        $get_depts = DB::table('add_departments')->get();
        $cur_c_code = $request->c_code;
        $cur_d_code = $request->d_code;
        foreach ($get_colls as $key => $get_coll) 
        {
            $coll_code = $get_coll->c_code;
            if($cur_c_code == $coll_code)
            {
                $cur_c_name = $get_coll->c_name;
            }
        }
        foreach ($get_depts as $key => $get_dept) 
        {
            $dept_code = $get_dept->d_code;
            if($cur_d_code == $dept_code)
            {
                $cur_d_name = $get_dept->d_name;
            }
        }
        $request->c_name = $cur_c_name;
        $request->d_name = $cur_d_name;

        Auth::login($user = User::create([
            'c_code' => $request->c_code,
            'c_name' => $request->c_name,
            'd_code' => $request->d_code,
            'd_name' => $request->d_name,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));
        $user->attachRole($request->role_id);
        event(new Registered($user));

        Auth::login($user);

        return back();
    }
}
