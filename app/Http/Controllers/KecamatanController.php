<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function abang()
    {
        return view('kecamatan.v_abang');
    }

    public function bebandem()
    {
        return view('kecamatan.v_bebandem');
    }

    public function karangasem()
    {
        return view('kecamatan.v_karangasem');
    }

    public function kubu()
    {
        return view('kecamatan.v_kubu');
    }

    public function manggis()
    {
        return view('kecamatan.v_manggis');
    }

    public function rendang()
    {
        return view('kecamatan.v_rendang');
    }

    public function selat()
    {
        return view('kecamatan.v_selat');
    }

    public function sidemen()
    {
        return view('kecamatan.v_sidemen');
    }
}
