@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br>Daftar Kasus
                    <a href="{{route('kasus.create')}}" class="btn btn-primary float-right"> Tambah Data</a>
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
                                        <thead>
                                            <th>No</th>
                                            <th >Lokasi</th>
                                            <th>RW</th>
                                            <th>Total Reaktif</th>
                                            <th>Total Positif</th>
                                            <th>Total Sembuh</th>
                                            <th>Total Meninggal</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $no=1;
                                    @endphp
                                    @foreach($kasus as $data)

                                        <tr>
                                            <th scope="row">{{$no++}}</th>
                                            <td>Provinsi : {{$data->rw->desa->kecamatan->kota->provinsi->nama_provinsi}}<br>
                                            Kota / Kabupaten : {{$data->rw->desa->kecamatan->kota->nama_kota}}<br>
                                            Kecamatan : {{$data->rw->desa->kecamatan->nama_kecamatan}}<br>
                                            Kota / Desa : {{$data->rw->desa->nama_desa}}</td>
                                            <td>{{$data->rw->nama_rw}}</td>
                                            <td>{{$data->reaktif}}</td>
                                            <td>{{$data->positif}}</td>
                                            <td>{{$data->sembuh}}</td>
                                            <td>{{$data->meninggal}}</td>
                                            <td>{{$data->tanggal}}</td>
                                            <td>
                                            <form action="{{route('kasus.destroy',$data->id)}}"  method="POST">
                                            @csrf
                                            @method('DELETE')
                                      <a href="{{route('kasus.show', $data->id)}}" class="btn btn-success">Show <i class="far fa-eye"></i></a>
                                      <a href="{{route('kasus.edit', $data->id)}}" class="btn btn-warning">Edit  <i class="far fa-edit"></i></a>
                                      <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus <i class="far fa-trash-alt"></i></button>
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
@endsection
