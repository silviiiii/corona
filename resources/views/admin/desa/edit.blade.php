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
                <form action="{{route('desa.update',$desa->id)}}" method="POST">
                   @csrf
                   @method('PATCH')
                    <div class="form-group">
                        <label>Nama Desa</label>
                        <input type="text" name="nama_desa" value="{{$desa->nama_desa}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Nama Kecamatan</label>
                        <select name="id_kecamatan" class="form-control">
                        @foreach ($kecamatan as $data)
                        <option value="{{$data->id}}" {{$data->id == $desa->id_kecamatan ? 'selected' : ''}}>{{$data->nama_kecamatan}}</option>
                        @endforeach
                        </select>
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
