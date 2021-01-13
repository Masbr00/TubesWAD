@extends('layout')
@section('title', 'Profile')
@section('konten')
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('failed'))
<div class="alert alert-danger">
    <ul>
        <li>{!! \Session::get('failed') !!}</li>
    </ul>
</div>
@endif
<div class="row justify-content-center">
    <div style="width: 80%">
        <h4 style="text-align: center">Profile</h4>
            <br>
            <form method="GET" action="edit/profile/{{ Auth::user()->id }}">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" value="{{ Auth::user()->nama }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor Telp.</label>
                    <div class="col-sm-10">
                        <input type="number" name="telp" class="form-control" value="{{ Auth::user()->telp }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control" value="{{ Auth::user()->alamat }}">
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
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>

                <input type="submit" class="btn btn-warning btn-block btn-md" value="Update Profile">
                <a href="home" class="btn btn-primary btn-block btn-md">Cancel</a>
            </form>
    </div>
</div>
@endsection
