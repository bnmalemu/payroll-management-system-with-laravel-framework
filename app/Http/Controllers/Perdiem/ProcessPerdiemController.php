<?php

namespace App\Http\Controllers\Perdiem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProcessPerdiemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function get_processed(Request $request)
    {
        return view('perdiem.process.process');
    }
}
