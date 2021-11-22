<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratTugas;

class SuratController extends Controller
{
    //controller surat admin
    public function smAdmin()
    {
        $srt = SuratTugas::all();
        return view('sm-admin', ['srt' => $srt]);
    }

    //controller surat mahasiswa
    public function smMhs()
    {

    }

    public function stMhs()
    {
        return view('st-mhs');
    }

     public function simpan(Request $request)
    {
        SuratTugas::create([
            'judul' => $request->judul,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'nama_penyelenggara' => $request->nama_penyelenggara,
            'tanggal' => $request->tanggal,
            'tempat' => $request->tempat
        ]);
        return redirect('/dashboard/suratkeluar');
    }

    public function skMhs()
    {
        $srt = SuratTugas::all();
        return view('sk-mhs', ['srt' => $srt]);
    }

    public function pilihsrt()
    {
        return view('pilih-surat');
    }
}
