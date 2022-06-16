<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaApiController extends Controller
{
    public function all(){
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            'succes' => true,
            'message' => 'Berhasil Ditampilkan',
            'data' => $mahasiswa
        ], 200);
    }

    public function create(Request $request){
        $mahasiswa = Mahasiswa::create([
            'nim' => $request -> nim,
            'nama' => $request -> nama,
            'gender' => $request -> gender,
            'jurusan' => $request -> jurusan,
            'bidang_minat' => $request -> bidang_minat,
        ]);

        if($mahasiswa){
            return response()->json([
                'succes' => true,
                'message' => 'Berhasil Disimpan',
            ],200);
        }

        else{
            return response()->json([
                'succes' => false,
                'message' => 'Gagal Disimpan',
            ],401);
        }
    }

    public function update($id, Request $request){
        $mahasiswa = Mahasiswa::whereId($id)->update([
            'nim' => $request -> nim,
            'nama' => $request -> nama,
            'gender' => $request -> gender,
            'jurusan' => $request -> jurusan,
            'bidang_minat' => $request -> bidang_minat,
        ]);

        if($mahasiswa){
            return response()->json([
                'succes' => true,
                'message' => 'Data Berhasil Diubah',
            ],200);
        }

        else{
            return response()->json([
                'succes' => false,
                'message' => 'Data Gagal Diubah',
            ],400);
        }
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        if($mahasiswa){
            return response()->json([
                'succes' => true,
                'message' => 'Data Berhasil Dihapus',
            ],200);
        }

        else{
            return response()->json([
                'succes' => false,
                'message' => 'Data Gagal Dihapus',
            ],400);
        }
    }
}