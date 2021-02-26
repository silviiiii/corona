<div>
    <div class="form-group row ">
        <div class="col-md-6">
        <label  class="provinsi">Provinsi</label>
            <select wire:model="selectedProvinsi" class="form-control">
                <option value="" selected>Pilih Provinsi</option>
                @foreach($provinsis as $provinsi)
                    <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
        <label for="reaktif">Total Reaktif</label>
        <input type="text" class="form-control" value="@if (isset($kasus1)){{$kasus1->reaktif}} @endif" name="reaktif" required>
        </div>
    </div>

        <div class="form-group row ">
            <div class="col-md-6">
    {{-- @if(!is_null($selectedProvinsi)) --}}
            <label for="Kota">Kota</label>
                <select wire:model="selectedKota" class="form-control">
                    <option value="" selected>Pilih Kota/Kabupaten</option>
                    @foreach($kotas as $kota)
                        <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
                    @endforeach
                </select>
    {{-- <!-- @endif --> --}}
            </div>
            <div class="col-md-6">
                <label for="positif">Total Positif</label>
                <input type="text" class="form-control" value="@if (isset($kasus1)){{$kasus1->positif}} @endif" name="positif" required>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-md-6">
    {{-- <!-- @if (!is_null($selectedKota)) --> --}}
            <label for="kecamatan">Kecamatan</label>
                <select wire:model="selectedKecamatan" class="form-control">
                    <option value="" selected>Pilih Kecamatan</option>
                    @foreach($kecamatans as $kecamatan)
                        <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama_kecamatan }}</option>
                    @endforeach
                </select>
    {{-- <!-- @endif --> --}}
            </div>
            <div class="col-md-6">
                <label for="sembuh">Total Sembuh</label>
                <input type="text" class="form-control" value="@if (isset($kasus1)){{$kasus1->sembuh}} @endif" name="sembuh" required>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-md-6">
    {{-- <!-- @if (!is_null($selectedKecamatan)) --> --}}
            <label for="desa" >Desa</label>
                <select wire:model="selectedDesa" class="form-control">
                    <option value="" selected>Pilih Kelurahan/Desa</option>
                    @foreach($desas as $desa)
                        <option value="{{ $desa->id }}">{{ $desa->nama_desa }}</option>
                    @endforeach
                </select>
    {{-- <!-- @endif --> --}}
            </div>
            <div class="col-md-6">
                <label for="tanggal">Total Meninggal</label>
                <input type="text" class="form-control" value="@if (isset($kasus1)){{$kasus1->meninggal}} @endif" name="meninggal" required>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-md-6">
    {{-- <!-- @if (!is_null($selectedDesa)) --> --}}
            <label for="rw" >Rw</label>
                <select wire:model="selectedRw" class="form-control" name="id_rw">
                    <option value="" selected>Pilih Rw</option>
                    @foreach($rws as $rw)
                        <option value="{{ $rw->id }}">{{ $rw->nama_rw }}</option>
                    @endforeach
                </select>
    {{-- <!-- @endif --> --}}
            </div>
            <div class="col-md-6">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal"  class="form-control" value="@if (isset($kasus1)){{$kasus1->tanggal}} @endif" required>
            </div>
        </div>
</div>
