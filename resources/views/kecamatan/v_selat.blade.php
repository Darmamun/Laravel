@extends('layout.v_template')
@section('title', 'Hiden Paradise Hunter | Selat')

@section('content')
<header class="masthead" style="background-image: url('gambar/gambar1.jpg')">
    <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="site-heading">
        <h2>
            Kecamatan Selat
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
        <p> Kecamatan Selat adalah sebuah kecamatan di Kabupaten Karangasem, Bali, Indonesia. Luasnya adalah 80,35 km². Pada tahun 2002, penduduknya berjumlah 34.760 jiwa. Kecamatan Selat juga terkenal dengan sebutan Desa Selat Duda. Daerah ini terkenal dengan sektor perkebunan salak terutama di Desa Duda, Desa Duda Utara, dan Desa Duda Timur. Kantor Camat Selat berada di Desa Duda tepatnya di Jl. Raya Besakih, Amlapura. Di kecamatan ini terdapat Pura Pasar Agung yang terletak di Desa Sebudi. Objek Wisata yang ada di Kecamatan Selat yaitu Objek Wisata Putung yang terletak di Br. Putung Desa Duda Timur.</p>
        <a href="/selat/wisata" class="btn btn-primary">Tempat Wisata</a>
        <a href="/selat/penginapan" class="btn btn-primary">Penginapan</a>
        <a href="/selat/restoran" class="btn btn-primary">Restoran</a>
    </div>
</div>
</header>

@endsection