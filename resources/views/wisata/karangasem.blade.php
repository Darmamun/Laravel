@extends('layout.v_template')
@section('title', 'Hiden Paradise Hunter | Kecamatan Abang')

@section( 'content')
<header class="masthead" style="background-image: url('{{ asset('gambar/gambar1.jpg') }}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h3 class="jbtext1 display-5 fw-bold">Tempat Wisata</h3>
                    <h1 class="jbtext1 display-5 fw-bold">KECAMATAN KARANGASEM</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<a href="addkarangasem" class="btn btn-primary btn-sm">Add</a>
    <br>

    @if(session('pesan'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ session('pesan') }}
    </div>
        
    @endif
   <table class="table table-bordered">
       <thead>
           <tr>
               <th>No</th>
               <th>Nama Wisata</th>
               <th>Deskripsi</th>
               <th>Alamat</th>
               <th>Foto Wisata</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($karangasem as $data)
               <tr>
                   <td></td>
                   <td>{{ $data->nama_wisata }}</td>
                   <td>{{ $data->deskripsi }}</td>
                   <td>{{ $data->alamat }}</td>
                   <td><img src="{{ url('foto_wisata/'.$data->foto_wisata) }}" width="300px"></td>
                   <td>
                    <a href="/karangasem/karangasemdetail/{{ $data->id_wisata }}" class="btn btn-sm btn-success">Detail</a>
                   <a href="/karangasem/editkarangasem/{{ $data->id_wisata }}" class="btn btn-sm btn-warning">Edit</a>
                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_wisata }}">
                       Delete
                   </button>
                </td>
                   

               </tr>
           @endforeach
       </tbody>

   </table>
   <header>

    @foreach ($karangasem as $data)
    <div class="modal modal-danger fade" id="delete{{ $data->id_wisata }}">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-tittle">{{ $data->nama_wisata }}</h4>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda Yakin Ingin Menghapus Data Ini????</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull left" data-dismiss="modal">No</button>
                    <a href="/karangasem/delete/{{ $data->id_wisata }}" class="btn btn-outline">Yes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    @endforeach
        
@endsection