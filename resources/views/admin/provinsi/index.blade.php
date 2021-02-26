@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br>
                    Daftar Kota
                <a href="{{route('provinsi.create')}}" class="btn btn-primary float-right">
                Tambah Data</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Kode Provinsi</th>
                                <th>Nama Provinsi</th>
                                <th>Action</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach ($provinsi as $data)
                            <form action="{{route('provinsi.destroy',$data->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->kode_provinsi}}</td>
                                    <td>{{$data->nama_provinsi}}</td>
                                    <td>
                            <a href="{{route('provinsi.show', $data->id)}}" class="btn btn-success">Show <i class="far fa-eye"></i></a>
                            <a href="{{route('provinsi.edit', $data->id)}}" class="btn btn-warning">Edit <i class="far fa-edit"></i></a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Dihapus ?')">Hapus <i class="far fa-trash-alt"></i></button>
                        </td>                                </tr>
                            </form>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
