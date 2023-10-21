@extends('layouts.app')

@section('title')


@section('content')
<h1>Data Contact</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('message'))
                <div class="alert alert-success">
                <strong>Berhasil</strong>
                <p>{{$message}}</p>
                </div>       
            @endif
                <form action="/about{{$about->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                    @csrf

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="{{$about->deskripsi}}">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror

                <img src="/image/{{$about->image}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="nama">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{$about->image}}">
                    @error('image')
                    <div class="invalid-feedback" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                {{-- <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="nophone" placeholder="Phone" value="{{$about->nophone}}">
                </div>
                @error('nophone')
                <small style="color:red">{{$message}}</small>
                 @enderror --}}


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
                </form>

            </div>

        </div>
    </div>
@endsection
@endsection