@extends('layouts.navbar')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" align="center">
            {{ __('Buat Surat') }}
        </h2>
    </x-slot>

<div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form action="/dashboard/simpansurat" method="POST">
                            @csrf
                            <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-3">
                                    <main class="form-signin">
                                        <form>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="judul" id="floatingInput">
                                            <label for="floatingInput">Judul</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="nim" id="floatingInput">
                                            <label for="floatingInput">NIM</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="nama" id="floatingInput">
                                            <label for="floatingInput">Nama</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="nama_penyelenggara" id="floatingInput">
                                            <label for="floatingInput">Nama Penyelenggara</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="tanggal" id="floatingInput">
                                            <label for="floatingInput">Tanggal</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="tempat" id="floatingInput">
                                            <label for="floatingInput">Tempat</label>
                                            </div>

                                            <button class="w-100 btn btn-lg btn-primary btn-success text-dark" type="submit" value="Simpan">Kirim</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

@endsection
