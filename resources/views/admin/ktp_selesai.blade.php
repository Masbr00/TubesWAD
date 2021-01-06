@extends('admin_layout')
@section('title', 'List KTP Selesai')
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
            <td>423255</td>
            <td>Pengajuan Pembuatan KTP</td>
            <td>Cecep Arif Rahman</td>
            <td>2/10/2020</td>
            <td>Pengiriman dengan jasa Go-Jek</td>
            <td>Dokumen Selesai</td>
        </tr>
    </tbody>
</table>
<!-- end of konten -->
@endsection