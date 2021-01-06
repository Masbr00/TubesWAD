@extends('admin_layout')
@section('title', 'Pembuatan KTP')
@section('konten')
<!-- konten -->
<h3><center>Form Pembuatan KTP</center></h3>
<div class="row justify-content-center">
    <form style="width: 80%">
        <div class="form-group">
            <label>Nama Lengkap :</label>
            <input type="text" class="form-control">
        </div>

        <div class="form-group">
            <label>Tempat/Tgl Lahir :</label>
            <input type="date" name="tgl_lahir" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin :</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="p/l" id="exampleRadios2" value="laki-laki">
                <label class="form-check-label" for="exampleRadios2">
                    Laki-Laki
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="p/l" id="exampleRadios3" value="wanita">
                <label class="form-check-label" for="exampleRadios3">
                    Wanita
                </label>
            </div>
        </div>
        
        <div class="form-group">
            <div class="form-group border border-dark rounded px-3">
                <label>Alamat :</label>
                <input type="text" name="alamat" class="form-control">
                <label>RT/RW :</label>
                <input type="text" name="rt/rw" class="form-control">
                <label>Kel/Desa :</label>
                <input type="text" name="kelurahan" class="form-control">
                <label>Kecamatan :</label>
                <input type="text" name="kecamatan" class="form-control"><br>
            </div>
        </div>

        <div class="form-group">
            <label>Agama :</label>
            <select class="custom-select" id="inlineFormCustomSelectPref">
                <option value="Pelajar">Islam</option>
                <option value="PNS">Kriten</option>
                <option value="Swasta">Katolik</option>
                <option value="Swasta">Hindu</option>
                <option value="Swasta">Budha</option>
                <option value="Swasta">Konghucu</option>
            </select>
        </div>

        <div class="form-group">
            <label>Status Perkawinan :</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="p/l" id="exampleRadios2" value="belum_kawin">
                <label class="form-check-label" for="exampleRadios2">
                    Belum Kawin
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="p/l" id="exampleRadios3" value="sudah_kawin">
                <label class="form-check-label" for="exampleRadios3">
                    Sudah Kawin
                </label>
            </div>
        </div>

        <div class="form-group">
            <label>Pekerjaan :</label>
            <select class="custom-select" id="inlineFormCustomSelectPref">
                <option value="belum_kerja">Belum/Tidak Bekerja</option>
                <option value="pelajar_mahasiswa">Pelajar/Mahasiswa</option>
                <option value="pns">Pegawai Negri Sipil</option>
                <option value="swasta">Swasta</option>
                <option value="karyawan_bumn">Karyawan BUMN</option>
                <option value="buruh">Buruh</option>
                <option value="pensiunan">Pensiunan</option>
            </select>
        </div>

        <div class="form-group">
            <label>Kewarganegaraan :</label>
            <select class="custom-select" id="inlineFormCustomSelectPref">
                <option value="wni">WNI</option>
                <option value="wna">WNA</option>
            </select>
        </div>
        
        <div class="form-group">
            <label>Upload Pas foto :</label>
            <label>Ketentuan : </label>
            <ol>
                <li>Latar belakang warna biru</li>
                <li>Ukuran 3x4</li>
                <li>Format foto yang diperbolehkan : png, jpg, dan jpeg</li>
            </ol>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Pas Foto</div>
                </div>
                <input type="file" class="form-control" name="pas_foto">
            </div>
        </div>

        <div class="form-group">
            <label>Upload Scan/Foto KK :</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">KK</div>
                </div>
                <input type="file" class="form-control" name="KK">
            </div>
        </div>

        <div class="form-group">
            <label>Upload Scan/Foto Surat Pengantar RT yang sudah dilegalisir :</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Surat Pengantar RT</div>
                </div>
                <input type="file" class="form-control" name="pengantar_rt">
            </div>
        </div>

        <div class="form-group">
            <label>Upload Scan/Foto Surat Pengantar Kelurahan yang sudah dilegalisir :</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Surat Pengantar Kelurahan</div>
                </div>
                <input type="file" class="form-control" name="pas_foto">
            </div>
        </div>

        <div class="form-group">
            <label>Metode Pengiriman Dokumen :</label>
            <select class="custom-select" id="inlineFormCustomSelectPref">
                <option value="mandiri">Pengambilan Dokumen Langsung Ditempat</option>
                <option value="gojek">Pengiriman dengan jasa Go-Jek</option>
                <option value="grab">Pengiriman dengan jasa Grab</option>
                <option value="pos_indonesia">Pengiriman dengan jasa Pos Indonesia</option>
            </select>
        </div>

        <button class="btn btn-block btn-dark mb-3">Submit</button>
    </form>
</div>
<!-- end of konten -->
@endsection