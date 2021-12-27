<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RestoranModel extends Model
{
    public function abang()
    {
        return DB::table('tbl_restoran_abang')->get();
    }

    public function bebandem()
    {
        return DB::table('tbl_restoran_bebandem')->get();
    }

    public function karangasem()
    {
        return DB::table('tbl_restoran_karangasem')->get();
    }

    public function kubu()
    {
        return DB::table('tbl_restoran_kubu')->get();
    }

    public function manggis()
    {
        return DB::table('tbl_restoran_manggis')->get();
    }

    public function rendang()
    {
        return DB::table('tbl_restoran_rendang')->get();
    }

    public function selat()
    {
        return DB::table('tbl_restoran_selat')->get();
    }
    
    public function sidemen()
    {
        return DB::table('tbl_restoran_sidemen')->get();
    }
}
