@extends('layout.v_template')

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kuliah</h6>
    </div>
    <div class="card-body">
        <a href="/kuliah/add" class="btn btn-primary btn-sm">Add</a> <br />


        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th></th>
                        <th>Kode Dosen</th>
                        <th>Jam</th>
                        <th>Ruang Kelas</th>
                        <th>Jumlah Mahasiswa</th>
                        <th>Tanggal Mulai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                       @foreach ($sia as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $item->kd_mkul }}</td>
                                <td>{{ $item->nama_mkul }}</td>
                                <td>{{ $item->kd_dosen }}</td>
                                <td>{{ $item->jam }}</td>
                                <td>{{ $item->ruang_kelas }}</td>
                                <td>{{ $item->jumlah_mhs }}</td>
                                <td>{{ $item->tanggal_mulai }}</td>
                                <td>
                                   <a href="/kuliah/edit/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                                   <a href="/kuliah/delete/{{ $item->id }}" class="btn btn-sm btn-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection