<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenginapanModel extends Model
{
    public function abang()
    {
        return DB::table('tbl_penginapan_abang')->get();
    }

    public function bebandem()
    {
        return DB::table('tbl_penginapan_bebandem')->get();
    }

    public function karangasem()
    {
        return DB::table('tbl_penginapan_karangasem')->get();
    }

    public function kubu()
    {
        return DB::table('tbl_penginapan_kubu')->get();
    }

    public function manggis()
    {
        return DB::table('tbl_penginapan_manggis')->get();
    }

    public function rendang()
    {
        return DB::table('tbl_penginapan_rendang')->get();
    }

    public function selat()
    {
        return DB::table('tbl_penginapan_selat')->get();
    }
    
    public function sidemen()
    {
        return DB::table('tbl_penginapan_sidemen')->get();
    }
}
