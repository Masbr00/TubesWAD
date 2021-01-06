@extends('admin_layout')
@section('title', 'Daftar Pengajuan Dokumen')
@section('konten')
<!-- konten -->
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
        <tr>
            <td>1</td>
            <td>2394523</td>
            <td>Pengajuan Pembuatan KTP</td>
            <td>Yayan Ruhian</td>
            <td>1/1/2021</td>
            <td>Mandiri</td>
            <td>Dokumen Belum Selesai</td>
            <td>
                <button class="btn btn-success btn-sm" style="width: 100%">Update Status</button>
                <button class="btn btn-warning btn-sm" style="width: 100%">Update Data</button><br>
                <button class="btn btn-danger btn-sm" style="width: 100%">Hapus</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>423255</td>
            <td>Pengajuan Pembuatan KTP</td>
            <td>Cecep Arif Rahman</td>
            <td>2/10/2020</td>
            <td>Pengiriman dengan jasa Go-Jek</td>
            <td>Dokumen Belum Selesai</td>
            <td>
                <button class="btn btn-success btn-sm" style="width: 100%">Update Status</button>
                <button class="btn btn-warning btn-sm" style="width: 100%">Update Data</button><br>
                <button class="btn btn-danger btn-sm" style="width: 100%">Hapus</button>
            </td>
        </tr>
    </tbody>
</table>
<!-- end of konten -->
@endsection