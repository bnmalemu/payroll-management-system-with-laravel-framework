<?php

namespace App\Http\Controllers\Perdiem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RequestPerdiemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_request(Request $request)
    {
        $users = DB::table('users')->get();
        return view('perdiem.request.request', compact('users'));    
    }
}
