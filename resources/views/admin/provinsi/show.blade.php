@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br>
                Show
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label>Kode Provinsi</label>
                    <input type="text" name="kode_provinsi" value="{{$provinsi->kode_provinsi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                    <label>Nama Provinsi</label>
                    <input type="text" name="nama_provinsi" value="{{$provinsi->nama_provinsi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                    <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
