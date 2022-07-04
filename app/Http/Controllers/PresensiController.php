<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresensiController extends Controller
{
    public function index()
    {
        $presensi = DB::table('presensi')->join('pengajar', function ($join) {
            $join->on('pengajar.id', '=', 'presensi.pengajar_id');
            })->get();

        return view('presensi/home',[
            'presensi' => $presensi
        ]);
    }

    public function create(){
        $pengajar = DB::table('pengajar')->get();
        return view('presensi.create',[
            'pengajar' => $pengajar
        ]);
    }
    
    public function store(Request $request){
        $data = $request->all();
        // print_r($data);
        // exit;
        $save = array($data['tanggal'],$data['pengajar_id'],$data['status'],$data['keterangan']);
        DB::insert('insert into presensi (tanggal,pengajar_id,kehadiran,keterangan) values (?, ?, ?, ?)',$save);
        //Presensi::create($save);
        return redirect()->route('presensi.index');
    }

    public function edit($id){
        $items = DB::table('presensi')->where('id',$id)->get(); //Santri::findOrFail($id);
        return view('presensi.edit', compact('items'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Presensi::findOrFail($id);
        $item->update($data);
        return redirect()->route('presensi.index');
    }

    public function destroy($id){
        $item = presensi::findOrFail($id);
        $item->delete();
        return redirect()->route('presensi.index');
    }
}
