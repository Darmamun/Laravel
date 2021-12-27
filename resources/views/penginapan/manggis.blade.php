@extends('layout.v_template')
@section('title', 'Hiden Paradise Hunter | Kecamatan Manggis')

@section('content')
<header class="masthead" style="background-image: url('gambar/gambar1.jpg')">
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
   <table class="table table-bordered">
       <thead>
           <tr>
               <th>No</th>
               <th>Nama Penginapan</th>
               <th>Deskripsi</th>
               <th>Alamat</th>
               <th>Foto Penginapan</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($manggis as $data)
               <tr>
                   <td></td>
                   <td>{{ $data->nama_penginapan }}</td>
                   <td>{{ $data->deskripsi }}</td>
                   <td>{{ $data->alamat }}</td>
                   <td><img src="{{ url('foto_wisata/'.$data->foto_penginapan) }}" width="300px"></td>
                <td>
                    <a href="" class="btn btn-sm btn-success">Detail</a>
                   <a href="" class="btn btn-sm btn-warning">Edit</a>
                   <a href="" class="btn btn-sm btn-danger">Delete</a>
                </td>
                   

               </tr>
           @endforeach
       </tbody>

   </table>
   <header>

        
@endsection