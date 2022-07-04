<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index(){
        $data['nama'] = Auth::user()->username;
        // print_r(Auth::user()->);
        // exit;
        return view('dashboard',$data);
    }
}
