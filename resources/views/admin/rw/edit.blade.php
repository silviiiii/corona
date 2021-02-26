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
                <form action="{{route('rw.update',$rw->id)}}" method="POST">
                   @csrf
                   @method('PATCH')
                    <div class="form-group">
                        <label>Nama Rw</label>
                        <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Nama Desa</label>
                        <select name="id_desa" class="form-control">
                        @foreach ($desa as $data)
                        <option value="{{$data->id}}" {{$data->id == $rw->id_desa ? 'selected' : ''}}>{{$data->nama_desa}}</option>
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
