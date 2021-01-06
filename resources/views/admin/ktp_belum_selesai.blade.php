@extends('admin_layout')
@section('title', 'List KTP Belum Selesai')
@section('konten')
<!-- konten -->
<h3>Daftar Pengajuan Dokumen</h3>
<table class="table table-responsive table-hover">
    <thead class="thead-dark">
        <tr>
            <th class="align-middle">No. </th>
            <th class="align-middle">ID Dokumen</th>
            <th class="align-middle">Nama Dokumen</th>
            <th class="align-middle">Nama Pengaju</th>
            <th class="align-middle">Tanggal Pengajuan</th>
            <th class="align-middle">Metode Pengambilan KTP</th>
            <th class="align-middle">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>2394523</td>
            <td>Pengajuan Pembuatan KTP</td>
            <td>Yayan Ruhian</td>
            <td>1/1/2021</td>
            <td>Mandiri</td>
            <td>Dokumen Belum Selesai</td>
        </tr>
    </tbody>
</table>
<!-- end of konten -->
@endsection