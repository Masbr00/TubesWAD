@extends('layout')
@section('title', 'Profile')
@section('konten')
<div class="row justify-content-center">
    <div style="width: 80%">
        <h4 style="text-align: center">Profile</h4>
            <br>
        <form action="#" method="get">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
            </div>
    
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" value="">
            </div>
    
            </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nomor Handphone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nohp" value="">
            </div>
    
            </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat" value="">
            </div>
            <hr>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" require>
            </div>
    
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Cek Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="cek_password" require>
            </div>
    
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-dark btn-block" name="submit">Submit</button>
                <button type="submit" class="btn btn-danger btn-block" name="submit">Batal</button>
            </div>
        </form>
    </div>
</div>
@endsection
