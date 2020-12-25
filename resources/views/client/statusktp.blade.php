@extends('layout')
@section('title', 'Status KTP')
@section('konten')
<!-- konten -->
<h1>Status Dokumen</h1>
<br>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Dokumen</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><b>1</b></td>
            <td>Perpanjang KTP</td>
            <td>Sedang diproses</td>
            <td>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
<!-- end of konten -->
@endsection