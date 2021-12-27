<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class WisataModel extends Model
{
//Abang
    public function abang()
    {
        return DB::table('tbl_wisata_abang')->get();
    }
    public function abangdetail($id_wisata)
    {
        return DB::table('tbl_wisata_abang')->where('id_wisata', $id_wisata)->first();
    }

    public function addabang($data)
    {
        DB::table('tbl_wisata_abang')->insert($data);
    }

    public function editabang($id_wisata, $data)
    {
        DB::table('tbl_wisata_abang')->where('id_wisata', $id_wisata)->update($data);
    }

    public function deleteabang($id_wisata)
    {
        DB::table('tbl_wisata_abang')->where('id_wisata', $id_wisata)->delete();
    }

//bebandem

    public function bebandem()
    {
        return DB::table('tbl_wisata_bebandem')->get();
    }

    public function bebandemdetail($id_wisata)
    {
        return DB::table('tbl_wisata_bebandem')->where('id_wisata', $id_wisata)->first();
    }

    public function addbebandem($data)
    {
        DB::table('tbl_wisata_bebandem')->insert($data);
    }

    public function editbebandem($id_wisata, $data)
    {
        DB::table('tbl_wisata_bebandem')->where('id_wisata', $id_wisata)->update($data);
    }

    public function deletebebandem($id_wisata)
    {
        DB::table('tbl_wisata_bebandem')->where('id_wisata', $id_wisata)->delete();
    }

//karangasem

    public function karangasem()
    {
        return DB::table('tbl_wisata_karangasem')->get();
    }

    public function karangasemdetail($id_wisata)
    {
        return DB::table('tbl_wisata_karangasem')->where('id_wisata', $id_wisata)->first();
    }

    public function addkarangasem($data)
    {
        DB::table('tbl_wisata_bebandem')->insert($data);
    }

    public function editkarangasem($id_wisata, $data)
    {
        DB::table('tbl_wisata_karangasem')->where('id_wisata', $id_wisata)->update($data);
    }

    public function deletekarangasem($id_wisata)
    {
        DB::table('tbl_wisata_karangasem')->where('id_wisata', $id_wisata)->delete();
    }

//kubu
    public function kubu()
    {
        return DB::table('tbl_wisata_kubu')->get();
    }

    public function kubudetail($id_wisata)
    {
        return DB::table('tbl_wisata_kubu')->where('id_wisata', $id_wisata)->first();
    }

    public function addkubu($data)
    {
        DB::table('tbl_wisata_kubu')->insert($data);
    }

    public function editkubu($id_wisata, $data)
    {
        DB::table('tbl_wisata_kubu')->where('id_wisata', $id_wisata)->update($data);
    }

    public function deletekubu($id_wisata)
    {
        DB::table('tbl_wisata_kubu')->where('id_wisata', $id_wisata)->delete();
    }

//manggis
    public function manggis()
    {
        return DB::table('tbl_wisata_manggis')->get();
    }

    public function manggisdetail($id_wisata)
    {
        return DB::table('tbl_wisata_manggis')->where('id_wisata', $id_wisata)->first();
    }

    public function addmanggis($data)
    {
        DB::table('tbl_wisata_manggis')->insert($data);
    }

    public function editmanggis($id_wisata, $data)
    {
        DB::table('tbl_wisata_manggis')->where('id_wisata', $id_wisata)->update($data);
    }

    public function deletemanggis($id_wisata)
    {
        DB::table('tbl_wisata_manggis')->where('id_wisata', $id_wisata)->delete();
    }

//rendang
    public function rendang()
    {
        return DB::table('tbl_wisata_rendang')->get();
    }

    public function rendangdetail($id_wisata)
    {
        return DB::table('tbl_wisata_rendang')->where('id_wisata', $id_wisata)->first();
    }

    public function addrendang($data)
    {
        DB::table('tbl_wisata_rendang')->insert($data);
    }

    public function editrendang($id_wisata, $data)
    {
        DB::table('tbl_wisata_rendang')->where('id_wisata', $id_wisata)->update($data);
    }

    public function deleterendang($id_wisata)
    {
        DB::table('tbl_wisata_rendang')->where('id_wisata', $id_wisata)->delete();
    }

//selat    
    public function selat()
    {
        return DB::table('tbl_wisata_selat')->get();
    }

    public function selatdetail($id_wisata)
    {
        return DB::table('tbl_wisata_selat')->where('id_wisata', $id_wisata)->first();
    }

    public function addselat($data)
    {
        DB::table('tbl_wisata_selat')->insert($data);
    }

    public function editselat($id_wisata, $data)
    {
        DB::table('tbl_wisata_selat')->where('id_wisata', $id_wisata)->update($data);
    }

    public function deleteselat($id_wisata)
    {
        DB::table('tbl_wisata_selat')->where('id_wisata', $id_wisata)->delete();
    }

//sidemen    
    public function sidemen()
    {
        return DB::table('tbl_wisata_sidemen')->get();
    }

    public function sidemendetail($id_wisata)
    {
        return DB::table('tbl_wisata_selat')->where('id_wisata', $id_wisata)->first();
    }

    public function addsidemen($data)
    {
        DB::table('tbl_wisata_sidemen')->insert($data);
    }

    public function editsidemen($id_wisata, $data)
    {
        DB::table('tbl_wisata_sidemen')->where('id_wisata', $id_wisata)->update($data);
    }

    public function deletesidemen($id_wisata)
    {
        DB::table('tbl_wisata_sidemen')->where('id_wisata', $id_wisata)->delete();
    }

    


}
