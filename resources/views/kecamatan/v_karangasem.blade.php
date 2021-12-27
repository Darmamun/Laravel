@extends('layout.v_template')
@section('title', 'Hiden Paradise Hunter | Karangasem')

@section('content')
<header class="masthead" style="background-image: url('gambar/gambar1.jpg')">
    <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="site-heading">
        <h2>
            Kecamatan Karangasem
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
        <p> Karangasem adalah sebuah kecamatan di Kabupaten Karangasem, Provinsi Bali, Indonesia. Kecamatan ini berjarak sekitar 65 Km dari Kota Denpasar. Amlapura yang merupakan ibu kota Kabupaten Karangasem ada di kecamatan ini. Luas wilayah Kecamatan Karangasem adalah 94,23 km² dengan penduduk 97.584 jiwa pada tahun 2016.</p>
        <a href="/karangasem/wisata" class="btn btn-primary">Tempat Wisata</a>
        <a href="/karangasem/penginapan" class="btn btn-primary">Penginapan</a>
        <a href="/karangasem/restoran" class="btn btn-primary">Restoran</a>
    </div>
</div>
</header>

@endsection