<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index3()
    {
        return view('kelas.all', [
            "title" => "Kelas",
            "class" => Kelas::all()
        ]);
    }
    public function create()
    {
        return view('kelas.create', [
            "kelas_id" => Kelas::all()

        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required'
        ]);
        $result = Kelas::create($validateData);
        if ($result) {
       return redirect('/kelas')->with('success', 'Data siswa berhasil di tambahkan !');
        }
    }

    public function destroy(Kelas $classes)
    {
        $result = Kelas::destroy($classes->id);

        if($result) {
         return redirect('/kelas')->with('success', 'Data berhasil dihapus!');
     } else {
         return redirect('/kelas')->with('error', 'Gagal menghapus data.');
    }

}
public function edit(Kelas $classes)
    {
        return view('kelas.edit', [
            "class" => $classes

        ]);

    }


public function update(Request $request, Kelas $classes)
    {
        $validateData = $request->validate([
            'nama' => 'required'

        ]);
        $result = Kelas::where('id', $classes -> id)->update($validateData);
        if ($result) {
            return redirect('/kelas')->with('success', 'Data siswa berhasil di update !');
        }
    }
}
