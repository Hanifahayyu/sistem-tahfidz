<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KelasController extends Controller
{
    public function index()
    {
        $items = DB::table('kelas')->get();
        return view('kelas/home',[
            'items' => $items
        ]);
    }

    public function create(){
        return view('kelas.create');
    }
    
    public function store(Request $request){
        $data = $request->all();
        Kelas::create($data);
        return redirect()->route('santri.index');
    }

    public function edit($id){
        $items = Kelas::findOrFail($id);
        return view('kelas.edit', compact('items'));
    }

    public function update(Request $request, $id)
    {
        // print_r($request->all());
        // exit;
        $data = $request->all();
        $item = Kelas::findOrFail($id);
        $item->update($data);
        return redirect()->route('kelas.index');
    }

    public function delete($id){
        $item = Kelas::findOrFail($id);
        $item->delete();
        return redirect()->route('kelas.index');
    }
    
}
