@extends('layout.v_template')
@section('title', 'Hiden Paradise Hunter | Sidemen')

@section('content')
<header class="masthead" style="background-image: url('gambar/gambar1.jpg')">
    <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="site-heading">
        <h2>
            Kecamatan Sidemen
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
        <p> Daerah Sidemen merupakan daerah pengunungn dengan hawa udara yang sejuk. Kecamatan ini didominasi dengan panorama gunung, bukit, tegalan dan persawahan yang menghijau. Di tangah-tengah kecamatan Sidemen mengalir sungai Yeh Unda. Sungai ini sangat penting sekali sebagai sumber irigasi yang mengairi persawahan di kecamatan ini. <br><br>

            Sidemen terkenal sebagai sentra penghasil kain songket Bali atau dikenal juga dengan nama Songket Sidemen. Kain songket ini peminatnya tidak hanya dari warga lokal yang digunakan untuk kegiatan upacara keagamaan, juga sangat diminati oleh wisatawan luar negeri lho. Apalagi kini kain songket sidemen sudah dijadikan produk olahan lainnya seperti tas dan dompet. Tidak hanya sebagai penghasil kain songket khas Bali, sidemen juga memiliki beberapa tempat wisata yang mampu menarik kunjungan wisatawan.</p>
        <a href="/sidemen/wisata" class="btn btn-primary">Tempat Wisata</a>
        <a href="/sidemen/penginapan" class="btn btn-primary">Penginapan</a>
        <a href="/sidemen/restoran" class="btn btn-primary">Restoran</a>
    </div>
</div>
</header>

@endsection