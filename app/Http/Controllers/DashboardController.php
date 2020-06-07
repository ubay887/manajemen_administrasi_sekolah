<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(User $pengguna)
    {
        $data_admin = \App\User::where('role',"admin")->get();
        $data_petugas = \App\Tendik::all();
        $data_pengumuman = \App\Pengumuman::orderByRaw('created_at DESC')->limit(5)->get();
        return view('dashboard', compact('data_admin','data_pengumuman','data_petugas'));
    }
}
