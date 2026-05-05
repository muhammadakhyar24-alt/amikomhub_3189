<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman utama dashboard admin
     */
    public function index()
    {
        // Cek apakah file view-nya ada. 
        // Biasanya teman Anda meletakkan view admin di resources/views/admin/dashboard.blade.php
        if (view()->exists('admin.dashboard')) {
            return view('admin.dashboard');
        }

        // Jika view belum ada, tampilkan teks ini dulu agar tidak error
        return "Berhasil! Ini adalah halaman Admin Dashboard. (File view 'admin.dashboard' belum dibuat)";
    }
}