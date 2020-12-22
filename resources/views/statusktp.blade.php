@extends('layout')
@section('title', 'Status Dokumen')
@section('konten')
<!-- konten -->
<h1>Status Dokumen</h1>
<br>
<table>
    <thead>
		<tr>
			<th width="5%">No</th>
			<th width="40%">Nama Dokumen</th>
			<th width="30%">Status</th>
			<th width="15%">Aksi</th>
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