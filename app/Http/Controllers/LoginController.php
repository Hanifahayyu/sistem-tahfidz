<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('santri');
        }else{
            return view('login');
        }
    }
    public function proses(Request $request){
        $credentials = $this->validate($request,[
            'username'=>'required',
            'password'=>'required'
        ],[
            'required'=>':attribute Harus di isi!!'
        ]);

        if (Auth::Attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('santri');
        }else{
            return redirect('login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/login');
    }
}
