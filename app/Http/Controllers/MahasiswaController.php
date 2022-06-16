<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

#metode untuk menampilkan data dengan Eloquent ORM
class MahasiswaController extends Controller
{
    public function mahasiswa(){
        #metode untuk menampilkan data mahasiswa sebanyak 10 data/halaman
        $mahasiswa = Mahasiswa::paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);

        #metode untuk mengurutkan data berdasar nim secara descending
        #$mahasiswa = Mahasiswa::orderBy('nim', 'DESC')->paginate(10);
        #return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function pencarian(Request $request){
        #metode pencarian ini akan berjalan jika ada request dari user
        $cari = $request->cari;
        #metode ini akan mencari data sesuai keyword nama yang akan dicari
        $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->orWhere('nim', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah(){
        return view('tambah');
    }

    public function simpan(Request $request){
        $minat = implode(",", $request->get('minat'));
        Mahasiswa::create([
            'nim' => $request -> nim,
            'nama' => $request -> nama,
            'gender' => $request -> gender,
            'jurusan' => $request -> jurusan,
            'bidang_minat' => $minat
        ]);
        return redirect("/mahasiswa")->with('create', 'Data baru berhasil disimpan');
    }

    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update($id, Request $request){
        $minat = implode(',', $request->minat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> nim = $request->nim;
        $mahasiswa -> nama = $request->nama;
        $mahasiswa -> gender = $request->gender;
        $mahasiswa -> jurusan = $request->jurusan;
        $mahasiswa -> bidang_minat = $minat;
        $mahasiswa -> save();
        return redirect("/mahasiswa")->with('update', 'Data berhasil diubah');
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect("/mahasiswa")->with('delete', 'Data berhasil dihapus');
    }
}