<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::all();
        return view('tabel-student', compact('data'));
    }
    public function ViewAll()
    {
        $data = Student::all();
        return view('transaksi', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'npm' => 'required',
            'no_telp' => 'required',
            'jenjang_studi' => 'required',
            'semester' => 'required',
            'email' => 'required'
        ]));

        Student::create($data);
        return back()->with('message', 'data telah dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('edit', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        $attr = $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'npm' => 'required',
            'no_telp' => 'required',
            'jenjang_studi' => 'required',
            'semester' => 'required',
            'email' => 'required'
        ]);

        $student->update($attr);
        return back()->with('message', 'data telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
