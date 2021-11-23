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
         $srt = SuratTugas::all();
        return view('sm-mhs', ['srt' => $srt]);
    }

    public function stMhs()
    {
        return view('st-mhs');
    }

    public function skMhs()
    {
        $srt = SuratTugas::all();
        return view('sk-mhs', ['srt' => $srt]);
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

    public function hapus($id)
    {
        $srt = SuratTugas::find($id)->delete();
        return redirect ('/dashboard/suratmasuk');
    }

    public function edit($id)
    {
        $srt = SuratTugas::find($id);
        return view ('se-mhs', ['srt' => $srt]);
    }

    public function updated($id, Request $request)
    {
        $srt = SuratTugas::find($id);
         $srt->judul = $request->judul;
         $srt->nim = $request->nim;
         $srt->nama = $request->nama;
         $srt->nama_penyelenggara = $request->nama_penyelenggara;
         $srt->tanggal = $request->tanggal;
         $srt->tempat = $request->tempat;
         $srt->save();
        return redirect('/dashboard/suratmasuk');
    }

    public function svMhs($id)
        {
            $srt = SuratTugas::find($id);
            return view ('sv-mhs', ['srt' => $srt]);
        }

    public function pilihsrt()
    {
        return view('pilih-surat');
    }
}
