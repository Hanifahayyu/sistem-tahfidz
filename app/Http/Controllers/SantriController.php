<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class SantriController extends Controller
{
    // public function __construct()
    // {
    //     //$this->middleware('auth');
    // }

    public function index()
    {
        $items = DB::table('santri')->select(
        'santri.id',
        'nama_lengkap',
        'program_nama',
        'kelas_nama',
        'jenis_kelamin',
        'no_telp_ayah')->join('program_tahfidz',function($join){
            $join->on('program_tahfidz.id','=','santri.program_id');
        })->join('user',function($join){
            $join->on('user.id','=','santri.user_id');
        })->join('kelas',function($join){
            $join->on('kelas.id','=','santri.kelas_id');
        })->get();
        
        return view('santri/home',[
            'items' => $items
        ]);
    }

    public function create(){
        $program = DB::table('program_tahfidz')->get();
        $kelas = DB::table('kelas')->get();
        return view('santri.create',[
            'program' => $program,
            'kelas' => $kelas
        ]);
    }
    
    public function store(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
            'email' => 'required',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'jenjang_sekolah' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'no_telp_ayah' => 'required',
            'program_id' => 'required',
            'status' => 'required',
            'kelas_id' => 'required',
        ],[
            'required'=>':attribute Harus di isi!!'
        ]);
        $id = DB::table('user')->insertGetId([
            'username' => $request->input('username'),  
            'password' => Hash::make($request->input('password')),
            'email' => $request->input('email'),
            'level' => 'santri'
        ]);
        if($id){
            $saveSantri = array(
                'nama_lengkap' => $request->input('nama_lengkap'),  
                'tempat_lahir' => $request->input('tempat_lahir'),  
                'tanggal_lahir' => $request->input('tanggal_lahir'),  
                'alamat_lengkap' => $request->input('alamat_lengkap'),  
                'jenis_kelamin' => $request->input('jenis_kelamin'),  
                'jenjang_sekolah' => $request->input('jenjang_sekolah'),  
                'nama_ibu' => $request->input('nama_ibu'),  
                'nama_ayah' => $request->input('nama_ayah'),  
                'no_telp_ayah' => $request->input('no_telp_ayah'),  
                'program_id' => $request->input('program_id'),   
                'status' => $request->input('status'),  
                'user_id' => $id,
                'kelas_id' =>  $request->input('kelas_id')
            );
            DB::table('santri')->insert($saveSantri);
        }

        return redirect()->route('santri.index');
    }

    public function edit($id){
        $items = DB::table('santri')->select(
            'santri.id',
            'nama_lengkap',
            'tempat_lahir',
            'tanggal_lahir',
            'alamat_lengkap',
            'jenis_kelamin',
            'nama_ibu',
            'nama_ayah',
            'no_telp_ayah',
            'kelas_id',
            'program_id',
            'email',
            'username',
            'status',
        )->leftJoin('program_tahfidz',function($join) use ($id){
            $join->on('program_tahfidz.id','=','santri.program_id');
            $join->where('santri.id','=',$id);
        })->leftJoin('user',function($join){
            $join->on('user.id','=','santri.user_id');
        })->leftJoin('kelas',function($join){
            $join->on('kelas.id','=','santri.kelas_id');
        })->first();
        $program = DB::table('program_tahfidz')->get();
        $kelas = DB::table('kelas')->get();
        return view('santri.edit', [
            'items' => $items,
            'program' => $program,
            'kelas' => $kelas,
        ]);
    }

    public function update(Request $request, $id)
    {
      
        $updateSantri = array(
            'nama_lengkap' => $request->input('nama_lengkap'),  
            'tempat_lahir' => $request->input('tempat_lahir'),  
            'tanggal_lahir' => $request->input('tanggal_lahir'),  
            'alamat_lengkap' => $request->input('alamat_lengkap'),  
            'jenis_kelamin' => $request->input('jenis_kelamin'),  
            'jenjang_sekolah' => $request->input('jenjang_sekolah'),  
            'nama_ibu' => $request->input('nama_ibu'),  
            'nama_ayah' => $request->input('nama_ayah'),  
            'no_telp_ayah' => $request->input('no_telp_ayah'),  
            'program_id' => $request->input('program_id'),   
            'status' => $request->input('status'),  
            'user_id' => $id,
            'kelas_id' =>  $request->input('kelas_id')
        );
        // exit;
        $item = DB::table('santri')->where('id',$id)->update($updateSantri);
        return redirect()->route('santri.index');
    }

    public function delete($id){
        $item = Santri::findOrFail($id);
        $item->delete();
        return redirect()->route('santri.index');
    }
    
}
