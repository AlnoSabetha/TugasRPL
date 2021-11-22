@extends('layouts.navbar')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" align="center">
            {{ __('Pilih Surat') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <a href="/dashboard/buatsurat">Surat Tugas</a>
                    <a href="/dashboard/buatsurat">Surat Berita Acara</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

@endsection
