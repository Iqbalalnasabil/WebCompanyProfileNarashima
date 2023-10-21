@extends('layouts.app')
@section('title')
@section('css')
<!-- Custom styles for this page -->
<link href="{{asset ('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@stop
@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#tambahalternatif" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Carosel</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="tambahkriteria">
                <div class="card-body">
                    <a href="{{route('produk.index')}}" class="btn btn-primary mb-3" >Kembali</a>
                    @if(Session::has('msg'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Info</strong> {{Session::get('msg')}}
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                    @endif
                    <form action="{{route('produk.store')}}" method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk">
                            @error('nama_produk')
                            <div class="invalid-feedback" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control @error('deskripsi') is-invalid @enderror" name="description" ></textarea>
                        </div>
                        @error('deskripsi')
                        <small style="color:red">{{$message}}</small>
                        @enderror

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            @error('image')
                            <div class="invalid-feedback" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga">
                            @error('harga')
                            <div class="invalid-feedback" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Berat</label>
                            <input type="text" class="form-control @error('berat') is-invalid @enderror" name="berat">
                            @error('berat')
                            <div class="invalid-feedback" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-sm btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
 <!-- Page level plugins -->
 <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
@endsection
