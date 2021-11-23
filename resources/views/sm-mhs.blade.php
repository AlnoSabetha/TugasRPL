@extends('layouts.navbar')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" align="center">
            {{ __('Surat Keluar') }}
        </h2>
    </x-slot>

<div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <div class="">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No Surat</th>
                                    <th>Nim</th>
                                    <th>Nama</th>
                                    <th>Jenis Surat</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($srt as $s)
                                <tr>
                                    <td>{{ $s->id }}</td>
                                    <td>{{ $s->nim }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ 'Surat Tugas' }}</td>
                                    <td>{{ $s->created_at }}</td>
                                    <td><a href="/dashboard/viewsurat/{id}" class="btn btn-info"><img src="/img/view.png" alt="View Surat" width="30" height="20" ></a>
                                    <a href="/dashboard/editsurat/{{$s->id}}" class="btn btn-warning">Edit</a>
                                    <a href="/surat/hapus/{{$s->id}}" class="btn btn-danger">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

@endsection
