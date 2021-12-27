<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WisataModel;

class WisataController extends Controller
{

    public function __construct()
    {
        $this->WisataModel = new WisataModel();
        $this->middleware('auth');
    }
 
//abang    
    public function abang()
    {
        $data= [
            'abang'=> $this-> WisataModel-> abang(),
        ];
        return view('wisata.abang', $data);
    }

    public function abangdetail($id_wisata)
    {
        if (!$this->WisataModel->abangdetail($id_wisata)){
            abort(404);
        }
        $data= [
            'abang'=> $this-> WisataModel-> abangdetail($id_wisata),
        ];
        return view('v_detailwisata', $data);
    }
    public function addabang(){
        return view('v_addwisata');
    }

    public function abanginsert()
    {
        
        Request()->validate([
            'nama_wisata' => 'required|unique:tbl_wisata_abang,nama_wisata|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.unique'=> 'Nama Wisata ini Sudah Ada!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
            'foto_wisata.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->addabang($data);
        return redirect()->route('abang')->with('pesan','Data Berhasil Di Tambahkan !!!');

    }

    public function editabang($id_wisata)
    {
        if (!$this->WisataModel->abangdetail($id_wisata)){
            abort(404);
        }
        $data= [
            'abang'=> $this-> WisataModel-> abangdetail($id_wisata),
        ];
        return view('v_editwisata', $data);
    }

    public function updateabang($id_wisata)
    {
        
        Request()->validate([
            'nama_wisata' => 'required|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto_wisata<> "") {
            //jika ingin ganti fhoto
            //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->editabang($id_wisata, $data);
        }else{
            //jika tidak ingin ganti fhoto
            $data =[
                'nama_wisata' => Request()->nama_wisata,
                'deskripsi' => Request()->deskripsi,
                'alamat' => Request()->alamat,
            ];    
    
            $this->WisataModel->editabang($id_wisata, $data);
        }
        
        return redirect()->route('abang')->with('pesan','Data Berhasil Di Update !!!');

    }

    public function deleteabang($id_wisata)
    {
        //hapus fhoto
        $abang= $this->WisataModel->deleteabang($id_wisata);
        if ($abang->foto_wisata <> ""){
            unlink(public_path('foto_wisata').'/'. $abang->foto_wisata);
        }
        $this->WisataModel->deleteabang($id_wisata);
        return redirect()->route('abang')->with('pesan', 'Data Berhasil Di Hapus !!!');
    }

//bebandem
    public function bebandem()
    {
        $data= [
            'bebandem'=> $this-> WisataModel-> bebandem(),
        ];
        return view('wisata.bebandem', $data);
    }

    public function bebandemdetail($id_wisata)
    {
        if (!$this->WisataModel->bebandemdetail($id_wisata)){
            abort(404);
        }
        $data= [
            'bebandem'=> $this-> WisataModel-> bebandemdetail($id_wisata),
        ];
        return view('v_detailwisata', $data);
    }
    public function addbebandem(){
        return view('v_addwisata');
    }

    public function bebandeminsert()
    {
        
        Request()->validate([
            'nama_wisata' => 'required|unique:tbl_wisata_abang,nama_wisata|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.unique'=> 'Nama Wisata ini Sudah Ada!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
            'foto_wisata.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->addbebandem($data);
        return redirect()->route('abang')->with('pesan','Data Berhasil Di Tambahkan !!!');

    }

    public function editbebandem($id_wisata)
    {
        if (!$this->WisataModel->bebandemdetail($id_wisata)){
            abort(404);
        }
        $data= [
            'abang'=> $this-> WisataModel-> bebandemdetail($id_wisata),
        ];
        return view('v_editwisata', $data);
    }

    public function updatebebandem($id_wisata)
    {
        
        Request()->validate([
            'nama_wisata' => 'required|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto_wisata<> "") {
            //jika ingin ganti fhoto
            //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->editbebandem($id_wisata, $data);
        }else{
            //jika tidak ingin ganti fhoto
            $data =[
                'nama_wisata' => Request()->nama_wisata,
                'deskripsi' => Request()->deskripsi,
                'alamat' => Request()->alamat,
            ];    
    
            $this->WisataModel->editbebandem($id_wisata, $data);
        }
        
        return redirect()->route('bebandem')->with('pesan','Data Berhasil Di Update !!!');

    }

    public function deletebebandem($id_wisata)
    {
        //hapus fhoto
        $bebandem= $this->WisataModel->detailbebandem($id_wisata);
        if ($bebandem->foto_wisata <> ""){
            unlink(public_path('foto_wisata').'/'. $bebandem->foto_wisata);
        }
        $this->WisataModel->deletebebandem($id_wisata);
        return redirect()->route('bebandem')->with('pesan', 'Data Berhasil Di Hapus !!!');

    }

//karangasem
    public function karangasem()
    {
        $data= [
            'karangasem'=> $this-> WisataModel-> karangasem(),
        ];
        return view('wisata.karangasem', $data);
    }

    public function karangasemdetail($id_wisata)
    {
        if (!$this->WisataModel->karangasemdetail($id_wisata)){
            abort(404);
        }
        $data= [
            'karangasem'=> $this-> WisataModel-> karangasemdetail($id_wisata),
        ];
        return view('v_detailwisata', $data);
    }
    public function addkarangasem(){
        return view('v_addwisata');
    }

    public function karangaseminsert()
    {
        
        Request()->validate([
            'nama_wisata' => 'required|unique:tbl_wisata_abang,nama_wisata|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.unique'=> 'Nama Wisata ini Sudah Ada!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
            'foto_wisata.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->addkarangasem($data);
        return redirect()->route('abang')->with('pesan','Data Berhasil Di Tambahkan !!!');

    }

    public function editkarangasem($id_wisata)
    {
        if (!$this->WisataModel->karangasemdetail($id_wisata)){
            abort(404);
        }
        $data= [
            'abang'=> $this-> WisataModel-> karangasemdetail($id_wisata),
        ];
        return view('v_editwisata', $data);
    }

    public function updatekarangasem($id_wisata)
    {
        
        Request()->validate([
            'nama_wisata' => 'required|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto_wisata<> "") {
            //jika ingin ganti fhoto
            //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->editkarangasem($id_wisata, $data);
        }else{
            //jika tidak ingin ganti fhoto
            $data =[
                'nama_wisata' => Request()->nama_wisata,
                'deskripsi' => Request()->deskripsi,
                'alamat' => Request()->alamat,
            ];    
    
            $this->WisataModel->editkarangasem($id_wisata, $data);
        }
        
        return redirect()->route('karangasem')->with('pesan','Data Berhasil Di Update !!!');

    }

    public function deletekarangasem($id_wisata)
    {
        //hapus fhoto
        $karangasem= $this->WisataModel->detailkarangasem($id_wisata);
        if ($karangasem->foto_wisata <> ""){
            unlink(public_path('foto_wisata').'/'. $karangasem->foto_wisata);
        }
        $this->WisataModel->deletebebandem($id_wisata);
        return redirect()->route('karangasem')->with('pesan', 'Data Berhasil Di Hapus !!!');

    }

//kubu
    public function kubu()
    {
        $data= [
            'kubu'=> $this-> WisataModel-> kubu(),
        ];
        return view('wisata.kubu', $data);
    }

    public function kubudetail($id_wisata)
    {
        if (!$this->WisataModel->kubudetail($id_wisata)){
            abort(404);
        }
        $data= [
            'kubu'=> $this-> WisataModel-> kubudetail($id_wisata),
        ];
        return view('v_detailwisata', $data);
    }
    public function addkubu(){
        return view('v_addwisata');
    }

    public function kubuinsert()
    {
        
        Request()->validate([
            'nama_wisata' => 'required|unique:tbl_wisata_abang,nama_wisata|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.unique'=> 'Nama Wisata ini Sudah Ada!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
            'foto_wisata.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->addkubu($data);
        return redirect()->route('abang')->with('pesan','Data Berhasil Di Tambahkan !!!');

    }

    public function editkubu($id_wisata)
    {
        if (!$this->WisataModel->kubudetail($id_wisata)){
            abort(404);
        }
        $data= [
            'abang'=> $this-> WisataModel-> kubudetail($id_wisata),
        ];
        return view('v_editwisata', $data);
    }

    public function updatekubu($id_wisata)
    {
        
        Request()->validate([
            'nama_wisata' => 'required|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto_wisata<> "") {
            //jika ingin ganti fhoto
            //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->editkubu($id_wisata, $data);
        }else{
            //jika tidak ingin ganti fhoto
            $data =[
                'nama_wisata' => Request()->nama_wisata,
                'deskripsi' => Request()->deskripsi,
                'alamat' => Request()->alamat,
            ];    
    
            $this->WisataModel->editkubu($id_wisata, $data);
        }
        
        return redirect()->route('kubu')->with('pesan','Data Berhasil Di Update !!!');

    }

    public function deletekubu($id_wisata)
    {
        //hapus fhoto
        $kubu= $this->WisataModel->detailkubu($id_wisata);
        if ($kubu->foto_wisata <> ""){
            unlink(public_path('foto_wisata').'/'. $kubu->foto_wisata);
        }
        $this->WisataModel->deletekubu($id_wisata);
        return redirect()->route('kubu')->with('pesan', 'Data Berhasil Di Hapus !!!');

    }

//manggis
    public function manggis()
    {
        $data= [
            'manggis'=> $this-> WisataModel-> manggis(),
        ];
        return view('wisata.manggis', $data);
    }

    public function manggisdetail($id_wisata)
    {
        if (!$this->WisataModel->manggisdetail($id_wisata)){
            abort(404);
        }
        $data= [
            'manggis'=> $this-> WisataModel-> manggisdetail($id_wisata),
        ];
        return view('v_detailwisata', $data);
    }
    public function addmanggis(){
        return view('v_addwisata');
    }

    public function manggisinsert()
    {
        
        Request()->validate([
            'nama_wisata' => 'required|unique:tbl_wisata_abang,nama_wisata|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.unique'=> 'Nama Wisata ini Sudah Ada!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
            'foto_wisata.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->addmanggis($data);
        return redirect()->route('manggis')->with('pesan','Data Berhasil Di Tambahkan !!!');

    }

    public function editmanggis($id_wisata)
    {
        if (!$this->WisataModel->manggisdetail($id_wisata)){
            abort(404);
        }
        $data= [
            'manggis'=> $this-> WisataModel-> manggisdetail($id_wisata),
        ];
        return view('v_editwisata', $data);
    }

    public function updatemanggis($id_wisata)
    {
        
        Request()->validate([
            'nama_wisata' => 'required|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto_wisata<> "") {
            //jika ingin ganti fhoto
            //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->editmanggis($id_wisata, $data);
        }else{
            //jika tidak ingin ganti fhoto
            $data =[
                'nama_wisata' => Request()->nama_wisata,
                'deskripsi' => Request()->deskripsi,
                'alamat' => Request()->alamat,
            ];    
    
            $this->WisataModel->editmanggis($id_wisata, $data);
        }
        
        return redirect()->route('manggis')->with('pesan','Data Berhasil Di Update !!!');

    }

    public function deletemanggis($id_wisata)
    {
        //hapus fhoto
        $manggis= $this->WisataModel->detailmanggis($id_wisata);
        if ($manggis->foto_wisata <> ""){
            unlink(public_path('foto_wisata').'/'. $manggis->foto_wisata);
        }
        $this->WisataModel->deletemanggis($id_wisata);
        return redirect()->route('manggis')->with('pesan', 'Data Berhasil Di Hapus !!!');

    }

//rendang    
    public function rendang()
    {
        $data= [
            'rendang'=> $this-> WisataModel-> rendang(),
        ];
        return view('wisata.rendang', $data);
    }

    public function rendangdetail($id_wisata)
    {
        if (!$this->WisataModel->rendangdetail($id_wisata)){
            abort(404);
        }
        $data= [
            'rendang'=> $this-> WisataModel-> rendangdetail($id_wisata),
        ];
        return view('v_detailwisata', $data);
    }
    public function addrendang(){
        return view('v_addwisata');
    }

    public function rendanginsert()
    {
        
        Request()->validate([
            'nama_wisata' => 'required|unique:tbl_wisata_abang,nama_wisata|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.unique'=> 'Nama Wisata ini Sudah Ada!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
            'foto_wisata.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->addbebandem($data);
        return redirect()->route('abang')->with('pesan','Data Berhasil Di Tambahkan !!!');

    }

    public function editrendang($id_wisata)
    {
        if (!$this->WisataModel->rendangdetail($id_wisata)){
            abort(404);
        }
        $data= [
            'rendang'=> $this-> WisataModel-> rendangdetail($id_wisata),
        ];
        return view('v_editwisata', $data);
    }

    public function updaterendang($id_wisata)
    {
        
        Request()->validate([
            'nama_wisata' => 'required|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto_wisata<> "") {
            //jika ingin ganti fhoto
            //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->editrendang($id_wisata, $data);
        }else{
            //jika tidak ingin ganti fhoto
            $data =[
                'nama_wisata' => Request()->nama_wisata,
                'deskripsi' => Request()->deskripsi,
                'alamat' => Request()->alamat,
            ];    
    
            $this->WisataModel->editrendang($id_wisata, $data);
        }
        
        return redirect()->route('rendang')->with('pesan','Data Berhasil Di Update !!!');

    }

    public function deleterendang($id_wisata)
    {
        //hapus fhoto
        $rendang= $this->WisataModel->detailrendang($id_wisata);
        if ($rendang->foto_wisata <> ""){
            unlink(public_path('foto_wisata').'/'. $rendang->foto_wisata);
        }
        $this->WisataModel->deleterendang($id_wisata);
        return redirect()->route('rendang')->with('pesan', 'Data Berhasil Di Hapus !!!');

    }

//selat
    public function selat()
    {
        $data= [
            'selat'=> $this-> WisataModel-> selat(),
        ];
        return view('wisata.selat', $data);
    }

    public function selatdetail($id_wisata)
    {
        if (!$this->WisataModel->selatdetail($id_wisata)){
            abort(404);
        }
        $data= [
            'selat'=> $this-> WisataModel-> selatdetail($id_wisata),
        ];
        return view('v_detailwisata', $data);
    }
    public function addselat(){
        return view('v_addwisata');
    }

    public function selatinsert()
    {
        
        Request()->validate([
            'nama_wisata' => 'required|unique:tbl_wisata_abang,nama_wisata|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.unique'=> 'Nama Wisata ini Sudah Ada!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
            'foto_wisata.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->addselat($data);
        return redirect()->route('selat')->with('pesan','Data Berhasil Di Tambahkan !!!');

    }

    public function editselat($id_wisata)
    {
        if (!$this->WisataModel->selatdetail($id_wisata)){
            abort(404);
        }
        $data= [
            'selat'=> $this-> WisataModel-> selatdetail($id_wisata),
        ];
        return view('v_editwisata', $data);
    }

    public function updateselat($id_wisata)
    {
        
        Request()->validate([
            'nama_wisata' => 'required|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto_wisata<> "") {
            //jika ingin ganti fhoto
            //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->editselat($id_wisata, $data);
        }else{
            //jika tidak ingin ganti fhoto
            $data =[
                'nama_wisata' => Request()->nama_wisata,
                'deskripsi' => Request()->deskripsi,
                'alamat' => Request()->alamat,
            ];    
    
            $this->WisataModel->editselat($id_wisata, $data);
        }
        
        return redirect()->route('selat')->with('pesan','Data Berhasil Di Update !!!');

    }

    public function deleteselat($id_wisata)
    {
        //hapus fhoto
        $selat= $this->WisataModel->detailselat($id_wisata);
        if ($selat->foto_wisata <> ""){
            unlink(public_path('foto_wisata').'/'. $selat->foto_wisata);
        }
        $this->WisataModel->deleteselat($id_wisata);
        return redirect()->route('selat')->with('pesan', 'Data Berhasil Di Hapus !!!');

    }

//sidemen
    public function sidemen()
    {
        $data= [
            'sidemen'=> $this-> WisataModel-> sidemen(),
        ];
        return view('wisata.sidemen', $data);
    }

    public function sidemendetail($id_wisata)
    {
        if (!$this->WisataModel->bsidemendetail($id_wisata)){
            abort(404);
        }
        $data= [
            'sidemen'=> $this-> WisataModel-> sidemendetail($id_wisata),
        ];
        return view('v_detailwisata', $data);
    }
    public function addsidemen(){
        return view('v_addwisata');
    }

    public function sidemeninsert()
    {
        
        Request()->validate([
            'nama_wisata' => 'required|unique:tbl_wisata_abang,nama_wisata|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.unique'=> 'Nama Wisata ini Sudah Ada!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
            'foto_wisata.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->addsidemen($data);
        return redirect()->route('sidemen')->with('pesan','Data Berhasil Di Tambahkan !!!');

    }

    public function editsidemen($id_wisata)
    {
        if (!$this->WisataModel->sidemendetail($id_wisata)){
            abort(404);
        }
        $data= [
            'sidemen'=> $this-> WisataModel-> sidemendetail($id_wisata),
        ];
        return view('v_editwisata', $data);
    }

    public function updatesidemen($id_wisata)
    {
        
        Request()->validate([
            'nama_wisata' => 'required|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto_wisata' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama_wisata.required'=>'wajib diisi!!',
            'nama_wisata.max'=>'Max 255 Karakter',
            'deskripsi.required'=> 'wajib diisi!!',
            'alamat.required' => 'wajib diisi!!',
        ]);

        //Jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto_wisata<> "") {
            //jika ingin ganti fhoto
            //upload gambar/foto
        $file = Request()->foto_wisata;
        $fileName = Request()->nama_wisata.'.'.$file->extension();
        $file->move(public_path('foto_wisata'), $fileName);

        $data =[
            'nama_wisata' => Request()->nama_wisata,
            'deskripsi' => Request()->deskripsi,
            'alamat' => Request()->alamat,
            'foto_wisata' => $fileName,
        ];    

        $this->WisataModel->editsidemen($id_wisata, $data);
        }else{
            //jika tidak ingin ganti fhoto
            $data =[
                'nama_wisata' => Request()->nama_wisata,
                'deskripsi' => Request()->deskripsi,
                'alamat' => Request()->alamat,
            ];    
    
            $this->WisataModel->editsidemen($id_wisata, $data);
        }
        
        return redirect()->route('sidemen')->with('pesan','Data Berhasil Di Update !!!');

    }

    public function deletesidemen($id_wisata)
    {
        //hapus fhoto
        $sidemen= $this->WisataModel->detailsidemen($id_wisata);
        if ($sidemen->foto_wisata <> ""){
            unlink(public_path('foto_wisata').'/'. $sidemen->foto_wisata);
        }
        $this->WisataModel->deletesidemen($id_wisata);
        return redirect()->route('sidemen')->with('pesan', 'Data Berhasil Di Hapus !!!');

    }
}
