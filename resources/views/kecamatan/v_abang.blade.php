@extends('layout.v_template')
@section('title', 'Hiden Paradise Hunter | Abang')

@section('content')
<header class="masthead" style="background-image: url('gambar/gambar1.jpg')">
    <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="site-heading">
        <h2>
            Kecamatan Abang
        </h2>
    </div>
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="col">
            <img src="{{ asset('gambar/kubu2.jpg') }}" class="card-img-top" alt="...">
            </div>
            <div class="col">
            <img src="{{ asset('gambar/kubu2.jpg') }}" class="card-img-top" alt="...">
            </div>
            <div class="col">
            <img src="{{ asset('gambar/kubu2.jpg') }}" class="card-img-top" alt="...">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="site-heading">
        <h2>About</h2>
        <hr>
        <p> Kecamatan Abang adalah sebuah kecamatan di Kabupaten Karangasem, Bali, Indonesia. Luasnya adalah 134,05 km². Pada tahun 2010, penduduknya berjumlah 60.965 jiwa.</p>
        <a href="/abang/wisata" class="btn btn-primary">Tempat Wisata</a>
        <a href="/abang/penginapan" class="btn btn-primary">Penginapan</a>
        <a href="/abang/restoran" class="btn btn-primary">Restoran</a>
    </div>
</div>
</header>

@endsection