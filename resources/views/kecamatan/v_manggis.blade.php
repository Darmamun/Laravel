@extends('layout.v_template')
@section('title', 'Hiden Paradise Hunter | Manggis')

@section('content')
<header class="masthead" style="background-image: url('gambar/gambar1.jpg')">
    <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="site-heading">
        <h2>
            Kecamatan Manggis
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
        <p> Wilayah kecamatan Manggis ini merupakan wilayah pinggir pantai di ujung timur Pulau Bali, Indonesia, tetapi penduduknya bermata pencaharian petani. Sekalipun demikian, banyak warganya yang merantau ke Denpasar bahkan sampai ke Jawa dan Lombok untuk mencari penghidupan. Salah satu desanya yaitu Desa Ulakan pernah menjadi ibu kota kabupaten sementara Karangasem, karena kota Karangasem dilanda hujan debu volkanik akibat letusan Gunung Agung.</p>
        <a href="/manggis/wisata" class="btn btn-primary">Tempat Wisata</a>
        <a href="/manggis/penginapan" class="btn btn-primary">Penginapan</a>
        <a href="/manggis/restoran" class="btn btn-primary">Restoran</a>
    </div>
</div>
</header>

@endsection