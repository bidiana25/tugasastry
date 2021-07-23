@extends('layout.v_template')

@section('content')

<form action="/kuliah/insert" method="POST">
    @csrf

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kuliah</h6>
        </div>
        <div class="card-body">
            <div class ="row">
                <div class="col-sm-6">
                <label>Kode Mata Kuliah</label>
                <input name="kd_mkul" class="form-control" value="{{ old('kd_mkul') }}">
                <div class="text-danger">
                    @error('kd_mkul')
                    {{ $message }}
                    @enderror
                </div>
                </div>
            </div>

            <div class ="row">
                <div class="col-sm-6">
                <label>Nama Mata Kuliah</label>
                <input name="nama_mkul" class="form-control" value="{{ old('nama_mkul') }}">
                <div class="text-danger">
                    @error('nama_mkul')
                    {{ $message }}
                    @enderror
                </div>
                </div>
            </div>

            <div class ="row">
                <div class="col-sm-6">
                <label>Kode Dosen</label>
                <input name="kd_dosen" class="form-control" value="{{ old('kd_dosen') }}">
                <div class="text-danger">
                    @error('kd_dosen')
                    {{ $message }}
                    @enderror
                </div>
                </div>
            </div>

            <div class ="row">
                <div class="col-sm-6">
                <label>Jam</label>
                <input name="jam" class="form-control" value="{{ old('jam') }}">
                <div class="text-danger">
                    @error('jam')
                    {{ $message }}
                    @enderror
                </div>
                </div>
            </div>

            <div class ="row">
                <div class="col-sm-6">
                <label>Ruang Kelas</label>
                <input name="ruang_kelas" class="form-control" value="{{ old('ruang_kelas') }}">
                <div class="text-danger">
                    @error('ruang_kelas')
                    {{ $message }}
                    @enderror
                </div>
                </div>
            </div>

            <div class ="row">
                <div class="col-sm-6">
                <label>Jumlah Mahasiswa</label>
                <input name="jumlah_mhs" class="form-control" value="{{ old('jumlah_mhs') }}">
                <div class="text-danger">
                    @error('jumlah_mhs')
                    {{ $message }}
                    @enderror
                </div>
                </div>
            </div>

            <div class ="row">
                <div class="col-sm-6">
                <label>Tanggal Mulai</label>
                <input type="date" name="tanggal_mulai" class="form-control" value="{{ old('date') }}">
                <div class="text-danger">
                    @error('tanggal_mulai')
                    {{ $message }}
                    @enderror
                </div>
                </div>
            </div>
          
            <div class ="row">
                <div class="col-sm-6">
                <label></label>
                </div>
            </div>
            
            <div class ="row">
                <div class="col-sm-6">
                <button class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </div>
 
            </div>
        </div>
</form>

@endsection