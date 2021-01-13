<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.css') }}">
    <script src="https://kit.fontawesome.com/fe18d29869.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('asset/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/bootstrap.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-dark text-light">
    <br>
    <h3><center>Detail Data Pelanggan</center></h3>
    <br>
    <div class="row justify-content-center">
        <form method="GET" action="" style="width: 70%">
            <div class="border rounded border-primary px-3 py-3">
                <table class="table table-responsive-lg table-hover table-lg table-bordered bg-light">
                    <tbody>
                        <thead>
                            <tr class="table-primary">
                                <th class="align-middle" style="text-align: center">Field</th>
                                <th class="align-middle" style="text-align: center">Value</th>
                            </tr>
                        </thead>
                        @foreach ($data as $p)
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>{{ $p->nama_lengkap }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>{{ $p->tgl_lahir }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{ $p->pl }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{ $p->alamat }}</td>
                            </tr>
                            <tr>
                                <td>RT/RW</td>
                                <td>{{ $p->rtrw }}</td>
                            </tr>
                            <tr>
                                <td>Kel/Desa</td>
                                <td>{{ $p->kelurahan }}</td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td>{{ $p->kecamatan }}</td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>{{ $p->agama }}</td>
                            </tr>
                            <tr>
                                <td>Status Pernikahan</td>
                                <td>{{ $p->nikah }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>{{ $p->pekerjaan }}</td>
                            </tr>
                            <tr>
                                <td>Kewarganegaraan</td>
                                <td>{{ $p->kewarganegaraan }}</td>
                            </tr>
                            <tr>
                                <td>Pas Foto</td>
                                <td>{{ $p->pasfoto }}</td>
                            </tr>
                            <tr>
                                <td>Kartu Keluarga</td>
                                <td>{{ $p->kk }}</td>
                            </tr>
                            <tr>
                                <td>Surat Pengantar</td>
                                <td>{{ $p->surat_pengantar }}</td>
                            </tr>
                            <tr>
                                <td>Pengiriman</td>
                                <td>{{ $p->pengiriman }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <input type="submit" class="mt-3 btn btn-light mb-3" name="tutup" value="Tutup Halaman">
        </form>
        @if (isset($_GET['tutup']))
            <script>window.close();</script>;
        @endif
    </div>
</body>
</html>