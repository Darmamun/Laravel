@extends('layout.v_template')
@section('title', 'Hiden Paradise Hunter | Kubu')

@section('content')
<header class="masthead" style="background-image: url('gambar/gambar1.jpg')">
    <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="site-heading">
        <h2>
            Kecamatan Kubu
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
        <p> Kecamatan Kubu berada di bagian utara pulau Bali dan bersentuhan langsung dengan laut bali serta berada di kaki gunung Agung. Kecamatan ini merupakan salah satu daerah yang menjadi jalur aliran lahar pada saat gunung Agung meletus pada tahun 1963. Itu pula sebabnya, saat ini, Kecamatan Kubu menjadi daerah tambang pasir dan menjadi pemasok utama untuk memenuhi kebutuhan pasir dan material batu untuk wilyah Bali bagian Barat meliputi Kabupaten Buleleng dan Kabupaten Negara. Pengusaha pasir di kecamatan Kubu telah maju selangkah dibanding daerah lainnya dengan membentuk paguyuban guna mewadahi kegiatan penambang pasir dengan tujuan menjaga ketertiban dan pola penambangan yang sesuai dengan aturan yang diterapkan oleh pemerintah daerah Kabupaten Karangasem. Paguyuban ini diberi nama Lahar Kubu Manunggal dengan ketuanya I Nengah Subrata yang juga merupakan tokoh masyarakat dari daerah Karangasem. <br><br>

            Industri pariwisata di daerah ini belum semaju daerah bali Selatan yang terkenal dengan pantainya yang indah serta ombaknya yang menjadi incaran surfer dari seluruh dunia. Namun bukan berarti daerah ini tidak memiliki potensi wisata. Disepanjang pantai didaerah Kubu ini terdapat beberapa lokasi menyelam yang banyak dikunjungi oleh turis mancanegara. Pantainya yang lumayan curam memiliki lokasi karang dan biota laut yang indah. <br><br>
            
            Salah satu wisata budaya dan keagamaan yang penting di Kecamatan Kubu adalah Pura Bukit Mangun. Berada di desa Tianyar, sekitar 12 kilometer dari ibu kota Kecamatan. Di puncak bukit ini terdapat satu komplek pura yang mana untuk mencapainya harus menaiki ratusan anak tangga. Dari lokasi ini dapat terlihat Gunung Agung dan laut Bali sekaligus yang merupakan kombinasi pemandangan yang luar biasa.</p>
        <a href="/kubu/wisata" class="btn btn-primary">Tempat Wisata</a>
        <a href="/kubu/penginapan" class="btn btn-primary">Penginapan</a>
        <a href="/kubu/restoran" class="btn btn-primary">Restoran</a>
    </div>
</div>
</header>

@endsection