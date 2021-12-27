<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RestoranModel;

class RestoranController extends Controller
{
    public function __construct()
    {
        $this->RestoranModel = new RestoranModel();
    }
    public function abang()
    {
        $data= [
            'abang'=> $this-> RestoranModel-> abang(),
        ];
        return view('restoran.abang', $data);
    }

    public function bebandem()
    {
        $data= [
            'bebandem'=> $this-> RestoranModel-> bebandem(),
        ];
        return view('restoran.bebandem', $data);
    }

    public function karangasem()
    {
        $data= [
            'karangasem'=> $this-> WRestoranModel-> karangasem(),
        ];
        return view('restoran.karangasem', $data);
    }

    public function kubu()
    {
        $data= [
            'kubu'=> $this-> RestoranModel-> kubu(),
        ];
        return view('restoran.kubu', $data);
    }

    public function manggis()
    {
        $data= [
            'manggis'=> $this-> RestoranModel-> manggis(),
        ];
        return view('restoran.manggis', $data);
    }

    public function rendang()
    {
        $data= [
            'rendang'=> $this-> RestoranModel-> rendang(),
        ];
        return view('restoran.rendang', $data);
    }

    public function selat()
    {
        $data= [
            'selat'=> $this-> RestoranModel-> selat(),
        ];
        return view('restoran.selat', $data);
    }

    public function sidemen()
    {
        $data= [
            'sidemen'=> $this-> RestoranModel-> sidemen(),
        ];
        return view('restoran.sidemen', $data);
    }
}
