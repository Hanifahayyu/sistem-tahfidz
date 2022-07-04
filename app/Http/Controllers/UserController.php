<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
        $items = DB::table('user')->get();
        return view('user/home',[
            'items' => $items
        ]);
    }

    public function create(Request $request){

        return view('user.create');
    }
    
    public function store(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ],[
            'required'=>':attribute Harus di isi!!'
        ]);
        User::create([
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'email' => $request->email,
            'level' => $request->level,
            'username' => $request->username,
        ]);
        return redirect()->route('user.index')->with(['success'=>'User berhasil disimpan']);
    }

    public function edit($id){
        $items = user::findOrFail($id);
        return view('user.edit', compact('items'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ],[
            'required'=>':attribute Harus di isi!!'
        ]);
        $item = user::findOrFail($id);
        $item->update([
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'email' => $request->email,
            'level' => $request->level,
            'username' => $request->username,
        ]);
        return redirect()->route('user.index')->with(['success'=>'User berhasil diupdate']);;
    }

    public function delete($id){
        $item = user::findOrFail($id);
        $item->delete();
        return redirect()->route('user.index')->with(['success'=>'User berhasil dihapus']);;
    }
    
}
