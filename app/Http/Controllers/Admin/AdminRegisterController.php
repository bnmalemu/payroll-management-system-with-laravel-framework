<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userlist()
    {
        $arr['userlist'] = User::all();
        return view('admin.list_user')->with($arr);
    }

    public function userupdate()
    {
        return view('admin.update_user');
    }

    public function notify()
    {
        return view('admin.notification');
    }

    public function passchange()
    {
        return view('admin.change_password');
    }

    public function passupdate(Request $request)
    {
        $request->validate([
            'old_password'=>'required|min:6|max:100',
            'new_password'=>'required|min:6|max:100',
            'password_confirmation'=>'required|same:new_password',
        ]);

        $current_user = auth()->user();
        if(Hash::check($request->old_password, $current_user->password))
        {
            $current_user->update([
                'password'->bcrypt($request->new_passord)
            ]);
        }
        else
        {
            return back()->with('Error', 'Old Password does not matched.');
        }
    }
}
