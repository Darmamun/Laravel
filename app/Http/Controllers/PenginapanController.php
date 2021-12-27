<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenginapanModel;

class PenginapanController extends Controller
{
    public function __construct()
    {
        $this->PenginapanModel = new PenginapanModel();
    }
    public function abang()
    {
        $data= [
            'abang'=> $this-> PenginapanModel-> abang(),
        ];
        return view('penginapan.abang', $data);
    }

    public function bebandem()
    {
        $data= [
            'bebandem'=> $this-> PenginapanModel-> bebandem(),
        ];
        return view('penginapan.bebandem', $data);
    }

    public function karangasem()
    {
        $data= [
            'karangasem'=> $this-> PenginapanModel-> karangasem(),
        ];
        return view('penginapan.karangasem', $data);
    }

    public function kubu()
    {
        $data= [
            'kubu'=> $this-> PenginapanModel-> kubu(),
        ];
        return view('penginapan.kubu', $data);
    }

    public function manggis()
    {
        $data= [
            'manggis'=> $this-> PenginapanModel-> manggis(),
        ];
        return view('penginapan.manggis', $data);
    }

    public function rendang()
    {
        $data= [
            'rendang'=> $this-> PenginapanModel-> rendang(),
        ];
        return view('penginapan.rendang', $data);
    }

    public function selat()
    {
        $data= [
            'selat'=> $this-> PenginapanModel-> selat(),
        ];
        return view('penginapan.selat', $data);
    }

    public function sidemen()
    {
        $data= [
            'sidemen'=> $this-> PenginapanModel-> sidemen(),
        ];
        return view('penginapan.sidemen', $data);
    }
}
