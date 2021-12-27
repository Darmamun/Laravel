@extends('layout.v_template')
@section('title', 'Hiden Paradise Hunter | Home')

@section('content')
<!-- Page Header-->
<header class="masthead" style="background-image: url('{{ asset('gambar/gambar1.jpg') }}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h3 class="jbtext1 display-5 fw-bold">WELCOME</h3>
                    <h1 class="jbtext1 display-5 fw-bold">KARANGASEM DESTINATIONS</h1>
                    <span class="subheading">A Hidden place in Bali for tourist attractions that are still natural and you must visit</span>
                </div>
            </div>
        </div>
    </div>
</header>

<table class="table">
    <tr>
        <th width="100px">Nama Wisata</th>
        <th width="30px">:</th>
        <th>{{  $abang->nama_wisata }}</th>
    </tr>
    <tr>
        <th width="100px">Deskripsi</th>
        <th width="30px">:</th>
        <th>{{  $abang->deskripsi }}</th>
    </tr>
    <tr>
        <th width="100px">Alamat</th>
        <th width="30px">:</th>
        <th>{{  $abang->alamat }}</th>
    </tr>
    <tr>
        <th width="100px">Foto</th>
        <th width="30px">:</th>
        <th><img src="{{url('foto_wisata/'.$abang->foto_wisata) }}" width="300px"></th>
    </tr>
    <tr>
        <th><a href="/abang/wisata" class="btn btn-success tbn-sm">Kembali</a></th>
    </tr>
</table>

@endsection