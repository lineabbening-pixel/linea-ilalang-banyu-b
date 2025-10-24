<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    // Menampilkan halaman CV
    public function index()
    {
        // bisa juga passing data jika nanti mau dinamis
        return view('cv.index');
    }
}
