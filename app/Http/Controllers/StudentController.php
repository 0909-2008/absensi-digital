<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:students,nis',
            'nama' => 'required',
            'class_id' => 'required|exists:classes,id',
        ]);

        Student::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'class_id' => $request->class_id,
        ]);

        return redirect('/admin-test?page=siswa')
            ->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/admin-test?page=siswa')
            ->with('success', 'Data siswa berhasil dihapus!');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('admin.edit-siswa', [
            'student' => $student,
            'page' => 'siswa'
        ]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'class_id' => 'required|exists:classes,id',
        ]);

        $student->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'class_id' => $request->class_id,
        ]);

        return redirect('/admin-test?page=siswa')
            ->with('success', 'Data siswa berhasil diperbarui!');
    }
}