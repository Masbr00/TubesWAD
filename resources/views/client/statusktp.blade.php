@extends('layout')
@section('title', 'Status Dokumen')
@section('konten')
<!-- konten -->
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<h3>Status Dokumen</h3>
<br>
<table class="table table-responsive table-hover">
    <thead class="thead-dark">
        <tr>
            <th class="align-middle">No</th> 
            <th class="align-middle">ID Dokumen</th> 
            <th class="align-middle">Nama Dokumen</th>
            <th class="align-middle">Nama Pengaju</th>
            <th class="align-middle">Waktu Pengajuan</th>
            <th class="align-middle">Metode Pengambilan KTP</th>
            <th class="align-middle">Status</th>
            <th class="align-middle">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($status as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->id }}</td>
                <td>Pengajuan Pembuatan KTP</td>
                <td>{{ Auth::user()->nama }}</td>
                <td>{{ $p->created_at }}</td>
                <td>{{ $p->pengiriman }}</td>
                <td>{{ $p->status_dokumen }}</td>
                <td><a href="dokumen/delete/{{ $p->id }}" class="btn btn-danger" onclick="alert('Apakah anda yakin untuk membatalkan pengajuan dokumen ini?');">Batalkan</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<!-- end of konten -->
@endsection