<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            return view('admindash');
        }elseif (Auth::user()->hasRole('mahasiswa')) {
            return view('mhsdash');
        }elseif (Auth::user()->hasRole('dosen')) {
            return view('dosendash');
        }elseif (Auth::user()->hasRole('ppa')) {
            return view('ppadash');
        }
    }
}
