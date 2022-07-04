<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $items = Student::all();
        return view('mahasiswa',[
            'items' => $items
        ]);
    }

    public function create(){
        return view('student.create');
    }
    
    public function store(Request $request){
        $data = $request->all();
        Student::create($data);
        return redirect()->route('mahasiswa.index');
    }

    public function edit($id){
        $items = Student::findOrFail($id);
        return view('student.edit', compact('items'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Student::findOrFail($id);
        $item->update($data);
        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id){
        $item = Student::findOrFail($id);
        $item->delete();
        return redirect()->route('mahasiswa.index');
    }
}
