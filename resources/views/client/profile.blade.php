@extends('layout')
@section('title', 'Profile')
@section('konten')
<div class="row justify-content-center">
    <div style="width: 80%">
        <h4 style="text-align: center">Profile</h4>
            <br>
            <form>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ Auth::user()->nama }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor Telp.</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" value="{{ Auth::user()->telp }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ Auth::user()->alamat }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Konfirmasi Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="confirm_password">
                    </div>
                </div>

                <input type="submit" name="submit" class="btn btn-warning btn-block btn-md" value="Edit Profil">
                <input type="submit" name="cancel" class="btn btn-primary btn-block btn-md" value="Cancel">
            </form>
    </div>
</div>
@endsection
