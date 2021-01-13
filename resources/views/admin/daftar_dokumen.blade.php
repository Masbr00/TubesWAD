@extends('admin_layout')
@section('title', 'Daftar Pengajuan Dokumen')
@section('konten')
<!-- konten -->
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<h3>Daftar Pengajuan Dokumen</h3>
<table class="table table-responsive-sm table-hover table-sm">
    <thead class="thead-dark">
        <tr>
            <th class="align-middle">No. </th>
            <th class="align-middle">ID Dokumen</th>
            <th class="align-middle">Nama Dokumen</th>
            <th class="align-middle">Nama Pengaju</th>
            <th class="align-middle">Tanggal Pengajuan</th>
            <th class="align-middle">Metode Pengambilan KTP</th>
            <th class="align-middle">Status</th>
            <th class="align-middle">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->id }}</td>
                <td>Pengajuan Pembuatan KTP</td>
                <td>{{ $p->nama_lengkap }}</td>
                <td>{{ $p->created_at }}</td>
                <td>{{ $p->pengiriman }}</td>
                <td>{{ $p->status_dokumen }}</td>
                <td>
                    <form method="GET">
                        <a href="dokumen/updateStatus/{{ $p->id }}" class="btn btn-success btn-sm" style="width: 100%" onclick="return confirm('Apakah anda ingin mengupdate status dokumen ini?');">Update Status</a>
                        <a href="dokumen/detailData/{{ $p->id }}" class="btn btn-primary btn-sm" target="_blank" style="width: 100%">Detail Data</a>
                        <a href="dokumen/delete/{{ $p->id }}" class="btn btn-danger btn-sm" style="width: 100%" onclick="return confirm('Apakah anda yakin untuk membatalkan pengajuan dokumen ini?');">Hapus</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<!-- end of konten -->
@endsection