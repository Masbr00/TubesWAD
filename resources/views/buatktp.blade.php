@extends('layout')
@section('title', 'Pembuatan KTP')
@section('konten')
<!-- konten -->
<h1>Selamat Datang Di Halaman Pembuatan KTP</h1>
<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <div class="container">
        <p></p>
        <h3><center>Form Pembuatan KTP</center></h3>
        <form>
        <label>NIK :</label><br>
        <input type="text"><br>
        <label>Nama Lengkap :</label><br>
        <input type="text"><br>
        <label>Tempat/Tgl Lahir :</label><br>
        <input type="date" name="tgl_lahir" required><br>
        <label>Jenis Kelamin :</label><br>
        <p><input type='radio' name='jenis_kelamin' value='pria' />Pria</p>
        <p><input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan</p><br>
        <label>Alamat Lengkap :</label><br>
        <input type="text"><br>
        <label>Agama :</label><br>
        <input type="text"><br>
        <label>Status Perkawinan :</label><br>
        <p><input type='radio' name='status_perkawinan' value='Sudah Kawin' />Sudah Kawin</p>
        <p><input type='radio' name='status_perkawinan' value='Belum Kawin' />Belum Kawin</p><br>
        <label>Pekerjaan :</label><br>
        <p><input type='radio' name='Pekerjaan' value='Mahasiswa' />Mahasiswa</p>
        <p><input type='radio' name='Pekerjaan' value='Pelajar' />Pelajar</p>
        <p><input type='radio' name='Pekerjaan' value='Wiraswasta' />Wiraswasta</p>
        <p><input type='radio' name='Pekerjaan' value='PNS' />PNS</p><br>
        <label>Kewarganegaraan :</label><br>
        <p><input type='radio' name='Kewarganegaraan' value='WNI' />WNI</p>
        <p><input type='radio' name='Kewarganegaraan' value='WNA' />WNA</p>
        <center><button class="tombol_login">Submit</login></center>
        </form>
        </div>
    </body>
</html>
<!-- end of konten -->
@endsection