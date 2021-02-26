@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br>
                Edit
                </div>
                <div class="card-body">
                <form action="{{route('provinsi.update',$provinsi->id)}}" method="POST">
                   @csrf
                   @method('PATCH')
                    <div class="form-group">
                        <label>Kode Provinsi</label>
                        <input type="text" name="kode_provinsi" value="{{$provinsi->kode_provinsi}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" value="{{$provinsi->nama_provinsi}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
