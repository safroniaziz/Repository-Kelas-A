<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswas.index',compact('mahasiswas'));
    }

    public function create(){
        return view('mahasiswas.create');
    }

    public function post(Request $request){
        $mahasiswa = new Mahasiswa();
        $mahasiswa->npm = $request->npm;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->kelas = $request->kelas;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->save();

        return redirect()->route('manajemen_mahasiswa.index')->with(['success'   =>  'Data Berhasil Disimpan']);
    }

    public function delete(Mahasiswa $mahasiswa){
        $mahasiswa->delete();
        return redirect()->route('manajemen_mahasiswa.index')->with(['success'   =>  'Data Berhasil Dihapus']);
    }
}