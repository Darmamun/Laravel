@extends('layout.v_template')
@section('title', 'Hiden Paradise Hunter | Home')

@section('content')
<!-- Page Header-->
<header class="masthead" style="background-image: url('{{ asset('gambar/gambar1.jpg') }}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h3 class="jbtext1 display-5 fw-bold">Selamat Datang di</h3>
                    <h1 class="jbtext1 display-5 fw-bold">KARANGASEM DESTINATIONS</h1>
                    <span class="subheading">Tempat tersembunyi di Bali untuk tempat wisata yang masih alami dan harus Anda kunjungi</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="DESTINATION">
    <h4 class="text-center display-5 fw-bold">DESTINATIONS FROM KARANGASEM</h4>
    <ul class="d-flex justify-content-center list-group list-group-horizontal-sm">
        <li class="list-group-item">
            <div class="card">
                <img src="{{ asset('gambar/rumah-pohon.jpg') }}" class="card-img-top" width="300px" height="200px">
                <div class="card-body">
                    <p class="card-text">Kecamatan Kubu</p>
                    <a href="/kubu" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <div class="card">
                <img src="{{ asset('gambar/candi-dasa-manggis.jpg') }}" class="card-img-top" width="300px" height="200px">
                <div class="card-body">
                    <p class="card-text">Kecamatan Manggis</p>
                    <a href="/manggis" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <div class="card">
                <img src="{{ asset('gambar/bunga-kasna-rendang.jpg') }}" class="card-img-top" width="300px" height="200px">
                <div class="card-body">
                    <p class="card-text">Kecamatan Rendang</p>
                    <a href="/rendang" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <div class="card">
                <img src="{{ asset('gambar/bukit-putung-selat.jpg') }}" class="card-img-top" width="300px" height="200px">
                <div class="card-body">
                    <p class="card-text">Kecamatan Selat</p>
                    <a href="/selat" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </li>
    </ul>
    <ul class="d-flex justify-content-center list-group list-group-horizontal-sm">
        <li class="list-group-item">
            <div class="card">
                <img src="{{ asset('gambar/sidemen-bali.jpg') }}" class="card-img-top" width="300px" height="200px">
                <div class="card-body">
                    <p class="card-text">Kecamatan Sidemen</p>
                    <a href="/sidemen" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <div class="card">
                <img src="{{ asset('gambar/pantai-amed-abang.jpg') }}" class="card-img-top" width="300px" height="200px">
                <div class="card-body">
                    <p class="card-text">Kecamatan Abang</p>
                    <a href="/abang" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <div class="card">
                <img src="{{ asset('gambar/bebandem.jpg') }}" class="card-img-top" width="300px" height="200px">
                <div class="card-body">
                    <p class="card-text">Kecamatan Bebandem</p>
                    <a href="/bebandem" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <div class="card">
                <img src="{{ asset('gambar/bukit-asah-karangasem.jpg') }}" class="card-img-top" width="300px" height="200px">
                <div class="card-body">
                    <p class="card-text">Kecamatan Karangasem</p>
                    <a href="/karangasem" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </li>
    </ul>
</div>
@endsection