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
                <h6 class="m-0 font-weight-bold text-primary">Tambah Review</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="tambahkriteria">
                <div class="card-body">
                    <a href="{{route('review.index')}}" class="btn btn-primary mb-3" >Kembali</a>
                    @if(Session::has('msg'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Info</strong> {{Session::get('msg')}}
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                    @endif
                    <form action="{{route('review.store')}}" method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama">
                            @error('nama')
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

                        <div class="form-grup">
                            <div class="rate">
                              <input type="radio" id="star5" name="rating" class="form-control @error('rating') is-invalid @enderror" value="5" required/>
                              <label for="star5" title="text">5 stars</label>
                              <input type="radio" id="star4" name="rating"class="form-control @error('rating') is-invalid @enderror"value="4"  required/>
                              <label for="star4" title="text">4 stars</label>
                              <input type="radio" id="star3" name="rating" class="form-control @error('rating') is-invalid @enderror"value="3" required/>
                              <label for="star3" title="text">3 stars</label>
                              <input type="radio" id="star2" name="rating" class="form-control @error('rating') is-invalid @enderror"value="2" required/>
                              <label for="star2" title="text">2 stars</label>
                              <input type="radio" id="star1" name="rating"  class="form-control @error('rating') is-invalid @enderror" value="1" required />
                              <label for="star1" title="text">1 star</label>
                              @error('rating')
                                <div class="invalid-feedback" role="alert">
                                  {{$message}}
                                </div>
                              @enderror
                            </div>
                        <div>
                        <br><br><br>
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
