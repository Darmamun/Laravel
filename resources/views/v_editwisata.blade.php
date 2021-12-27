@extends('layout.v_template')
@section('title', 'Hiden Paradise Hunter | Edit Wisata')

@section('content')
<header class="masthead" style="background-image: url('{{ asset('gambar/kubu2.jpg') }}')">
    
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                
                    <form action="/abang/update/{{ $abang->id_wisata }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="content">
                            <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Nama Wisata</label>
                                    <input name="nama_wisata" class="form-control" value="{{ $abang->nama_wisata }}">
                                    <div class="text-danger">
                                        @error('nama_wisata')
                                            {{ $message }}    
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input name="deskripsi" class="form-control" value="{{ $abang->deskripsi }}">
                                    <div class="text-danger">
                                        @error('deskripsi')
                                            {{ $message }}    
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input name="alamat" class="form-control" value="{{ $abang->alamat }}">
                                    <div class="text-danger">
                                        @error('alamat')
                                            {{ $message }}    
                                        @enderror
                                </div>
                             
                                <div class="col-sm 12">
                                    <div class="col-sm-6">
                                        <img src="{{ url('foto_wisata/'.$abang->foto_wisata) }}" width="200px">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Ganti Foto</label>
                                            <input type="file" name="foto_wisata" class="form-control">
                                            <div class="text-danger">
                                                @error('foto_wisata')
                                                    {{ $message }}    
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                            </div>
                        </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection