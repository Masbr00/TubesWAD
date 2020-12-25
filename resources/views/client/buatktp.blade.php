@extends('layout')
@section('title', 'Pembuatan KTP')
@section('konten')
<!-- konten -->
<h3><center>Form Pembuatan KTP</center></h3>
<div class="row justify-content-center">
    <form style="width: 80%">
        <div class="form-group">
            <label>NIK :</label>
            <input type="text" class="form-control">
        </div>

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
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="pria">
                <label class="form-check-label" for="exampleRadios2">
                    Pria
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="wanita">
                <label class="form-check-label" for="exampleRadios3">
                    Wanita
                </label>
            </div>
        </div>
        
        <div class="form-group">
            <label>Alamat Lengkap :</label>
            <input type="text" class="form-control">
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
            <label>Status Perkawinan :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="sudah_kawin">
                <label class="form-check-label" for="exampleRadios2">
                    Sudah Kawin
                </label>
            </div>
            <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="belum_kawin">
                <label class="form-check-label" for="exampleRadios3">
                    Belum Kawin
                </label>
            </div>
        </div>

        <div class="form-group">
            <label>Pekerjaan :</label>
            <select class="custom-select" id="inlineFormCustomSelectPref">
                <option value="Pelajar">Pelajar</option>
                <option value="PNS">PNS</option>
                <option value="Swasta">Swasta</option>
            </select>
        </div>

        <div class="form-group">
            <label>Kewarganegaraan :</label>
            <select class="custom-select" id="inlineFormCustomSelectPref">
                <option value="wni">WNI</option>
                <option value="wna">WNA</option>
            </select>
        </div>
        <button class="btn btn-block btn-dark mb-3">Submit</button>
    </form>
</div>
<!-- end of konten -->
@endsection