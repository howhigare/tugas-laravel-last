<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Kelas;

class StudentsCotroller extends Controller
{
    public function index1()
    {
            return view('student/all', [
                "tittle" => 'murid',
                "student" => Student::all()
        ]);
    }
    public function show( Student $student)
    {
            return view('student.detail', [
                "tittle" => 'detail-student',
                "student" => $student
        ]);
    }

    public function create ()
    {
            return view('student.create', [
                "tittle" => 'create-student',
                "kelas_id" => Kelas::all()

        ]);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('/student/all')->with('success', 'Data siswa berhasil dihapus!');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $student = Student::create($validatedData);

        if ($student) {
            return redirect('/student/all')->with('success', 'Data siswa berhasil ditambahkan!');
        }

        return redirect('/student/all')->with('error', 'Gagal menambahkan data siswa.');
    }

    public function edit(Student $student)
    {
        return view('student.edit', [
            "title" => 'Edit Student',
            "student" => $student,
            "kelas" => Kelas::all()
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);
        $result = Student::where('id', $student -> id)->update($validateData);
        if ($result) {
       return redirect('/student/all')->with('success', 'Data siswa berhasil di update !');
        }

    }




}
