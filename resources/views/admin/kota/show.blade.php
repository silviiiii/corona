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
                        <label>Kode Kota</label>
                        <input type="text" name="kode_kota" value="{{$kota->kode_kota}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Kota</label>
                        <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                        <div class="form-group">
                        <label>Nama Provinsi</label>
                        <input type="text" class="form-control" value="{{$kota->provinsi->nama_provinsi}}" readonly>
                    </select>
                </div>
                    <div class="form-group">
                 <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
