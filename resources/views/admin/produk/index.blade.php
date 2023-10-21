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
            <a href="#listkriteria" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">List Kriteria</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="listkriteria">
                <div class="card-body">
                    <a href="{{route('produk.create')}}" class="btn btn-primary mb-3" >Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="DataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Berat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($produk as $row)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$row->nama_produk}}</td>
                                    <td>
                                        <img src="/image/{{$row->image}}" alt="" class="img-fluid" width="100">
                                    </td>
                                    <td>{{$row->deskripsi}}</td>
                                    <td>{{$row->harga}}</td>
                                    <td>{{$row->berat}}</td>
                                    <td>
                                        <a href="{{route('produk.edit',$row->id)}}" class="btn btn-sm btn-circle btn-warning"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('produk.destroy',$row->id)}}" class="btn btn-sm btn-circle btn-danger hapus"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
 <script src="{{asset('js/sweetalert.js')}}"></script>
 <script>
    $(document).ready(function(){
        $('#DataTable').DataTable();

        $('.hapus').on('click', function(){
            swal({
                title: "Apa kamu yakin?",
                text: "Sekali kamu hapus, data tidak dapat dikembalikan",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: $(this).attr('href'),
                        type: 'DELETE',
                        data: {
                            '_token': "{{csrf_token()}}"
                        },
                        success:function()
                        {
                            swal("Data berhasil dihapus", {
                            icon: "success",
                            }).then((willDelete) => {
                                window.location = "{{route('produk.index')}}"
                            });
                        }
                    })
                } else {
                    swal("Data Aman");
                }
            });
            return false;
         })
    })
 </script>
@stop 