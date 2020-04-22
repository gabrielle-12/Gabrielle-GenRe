<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;

class kecamatancontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function kecamatan(){
        $halaman = 'kecamatan';
        $kecamatan_list = Kecamatan::all();
        return view('kecamatan.index', compact('halaman', 'kecamatan_list'));
    }

    public function tambahkec() {
        $halaman = 'kecamatan';
        return view('kecamatan.tambahkls', compact('halaman'));
    }

    public function store(Request $request) {
        Kelas::create($request->all());
        return redirect('kecamatan');
    }
    public function detailkec($id) {
        $halaman = 'kecamatan';
        $kecamatan = Kecamatan::findOrFail($id);
        return view('kecamatan.detailkec7', compact('halaman','kecamatan'));
    }
    public function delete($id) {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->delete();
        return redirect('kecamatan');
    }
    public function editkec($id) {
        $halaman = 'kecamatan';
        $kecamatan = Kecamatan::findOrFail($id);
        return view('kecamatan.editkls', compact('halaman','kecamatan'));
    }
    public function updatekelas($id, Request $request) {
        $halaman = 'kecamatan';
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->update($request->all());
        $kecamatan->save();
        return redirect('kecamatan');
    }
    public function deleletekec($id) {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->delete();
        return redirect ('kecamatan');
    }
}