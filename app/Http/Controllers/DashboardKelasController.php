<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;

class DashboardKelasController extends Controller
{
    public function index(){
        return view('dashboard.kelas.all', [
            "title"=>"Dashboard",
            "class"=> Kelas::all()
        ]);
    }
    public function create()
    {
        return view('dashboard.kelas.create', [
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
       return redirect('/dashboard/kelas/all')->with('success', 'Data siswa berhasil di tambahkan !');
        }
    }

    public function destroy(Kelas $classes)
    {
        $result = Kelas::destroy($classes->id);

        if($result) {
         return redirect('/dashboard/kelas/all')->with('success', 'Data berhasil dihapus!');
     } else {
         return redirect('/dashboard/kelas/all')->with('error', 'Gagal menghapus data.');
    }
}
public function edit(Kelas $classes)
    {
        return view('dashboard.kelas.edit', [
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
            return redirect('/dashboard/kelas/all')->with('success', 'Data siswa berhasil di update !');
        }
    }
}
