@extends('layout.v_template')
@section('title', 'Hiden Paradise Hunter | Rendang')

@section('content')
<header class="masthead" style="background-image: url('gambar/gambar1.jpg')">
    <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="site-heading">
        <h2>
            Kecamatan Rendang
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
        <p> Kecamatan Rendang adalah sebuah kecamatan di Kabupaten Karangasem, Bali, Indonesia. Luasnya adalah 109,70 km². Pada tahun 2002, penduduknya berjumlah 30.748 jiwa. Di kecamatan ini berlokasi pura utama umat Hindu Bali, Pura Besakih.</p>
        <a href="/rendang/wisata" class="btn btn-primary">Tempat Wisata</a>
        <a href="/rendang/penginapan" class="btn btn-primary">Penginapan</a>
        <a href="/rendang/restoran" class="btn btn-primary">Restoran</a>
    </div>
</div>
</header>

@endsection