@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br>
                    Daftar Rw
                <a href="{{route('rw.create')}}" class="btn btn-primary float-right">
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
                                    <th>Nama Rw</th>
                                    <th>Nama Desa</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($rw as $data)
                                <form action="{{route('rw.destroy',$data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->nama_rw}}</td>
                                        <td>{{$data->desa->nama_desa}}</td>
                                        <form action="{{route('rw.destroy',$data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                  <td>
                                  <a href="{{route('rw.show', $data->id)}}" class="btn btn-success">Show <i class="far fa-eye"></i></a>
                                  <a href="{{route('rw.edit', $data->id)}}" class="btn btn-warning">Edit  <i class="far fa-edit"></i></a>
                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus <i class="far fa-trash-alt"></i></button>
                                  </td>                                    
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
