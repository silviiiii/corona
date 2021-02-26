@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br>
                    Daftar Kota
                <a href="{{route('kota.create')}}" class="btn btn-primary float-right">
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
                                    <th>Kode Kota</th>
                                    <th>Nama Kota</th>
                                    <th>Nama Provinsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($kota as $data)
                                <form action="{{route('kota.destroy',$data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->kode_kota}}</td>
                                        <td>{{$data->nama_kota}}</td>
                                        <td>{{$data->provinsi->nama_provinsi}}</td>
                                        <form action="{{route('kota.destroy',$data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                            <a href="{{route('kota.show', $data->id)}}" class="btn btn-success">Show <i class="far fa-eye"></i></a>
                            <a href="{{route('kota.edit', $data->id)}}" class="btn btn-warning">Edit <i class="far fa-edit"></i></a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus <i class="far fa-trash-alt"></i></button>
                        </td>                                        </form>
                                    </tr>
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
