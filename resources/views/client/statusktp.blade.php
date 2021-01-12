@extends('layout')
@section('title', 'Status Dokumen')
@section('konten')
<!-- konten -->
<h3>Status Dokumen</h3>
<br>
<table class="table table-responsive table-hover">
    <thead class="thead-dark">
        <tr>
            <th class="align-middle">ID Dokumen</th>
            <th class="align-middle">Nama Dokumen</th>
            <th class="align-middle">Nama Pengaju</th>
            <th class="align-middle">Waktu Pengajuan</th>
            <th class="align-middle">Metode Pengambilan KTP</th>
            <th class="align-middle">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($status as $p)
            @if ($p->id_user == Auth::user()->id)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>Pengajuan Pembuatan KTP</td>
                    <td>{{ Auth::user()->nama }}</td>
                    <td>{{ $p->created_at }}</td>
                    <td>{{ $p->pengiriman }}</td>
                    <td>{{ $p->status_dokumen }}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>
<!-- end of konten -->
@endsection