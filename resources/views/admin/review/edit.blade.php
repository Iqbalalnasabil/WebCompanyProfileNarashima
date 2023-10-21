@extends('layouts.app')

@section('title' ,'Edit', $review->title)
@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#tambahAlternatif" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Review {{$review->title}}</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="tambahkriteria">
                    <div class="card-body">
                        @if(Session::has('msg'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>Info</strong> {{Session::get('msg')}}
                            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        @endif
                        <form action="{{route('review.update', $review->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{$review->nama}}">
                                @error('nama')
                                <div class="invalid-feedback" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nama">Deskripsi</label>
                                <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control @error('deskripsi') is-invalid @enderror" name="description" value="{{$review->deskripsi}}">{{$review->deskripsi}}</textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            
                            <img src="/image/{{$review->image}}" alt="" class="img-fluid">
                            <div class="form-group">
                                <label for="nama">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{$review->image}}">
                                @error('image')
                                <div class="invalid-feedback" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nama">Rating</label>
                                <input type="text" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{$review->rating}}">
                                @error('rating')
                                <div class="invalid-feedback" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-sm btn-primary">Simpan</button>
                            <a href="{{route('review.index')}}" class="btn btn-sm btn-success">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
 <!-- Page level plugins -->
 <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
 <script>
    $(document).ready(function(){
        $('#DataTable').DataTable();
    })
 </script>
 @stop