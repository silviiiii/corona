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
                        <label>Nama Desa</label>
                        <input type="text" name="nama_desa" value="{{$desa->nama_desa}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                        <div class="form-group">
                        <label>Nama Kecamatan</label>
                        <input type="text" class="form-control" value="{{$desa->kecamatan->nama_kecamatan}}" readonly>
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
