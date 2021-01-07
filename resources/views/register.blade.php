<!DOCTYPE html>
<html>
<head>
<title>Registrasi SisFo Pelayanan Publik</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/colorlib.css') }}">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/img/logo.png') }}">
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Registrasi Diri</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form method="post" action="{{ route('register') }}">
                    {{csrf_field()}}
                    <input class="text w3lpass" type="text" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}" required>
                    <input class="text w3lpass number" type="number" name="telp" placeholder="No. HP" value="{{ old('telp') }}" required>
                    <input class="text w3lpass" type="text" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}" required>
                    <input class="text w3lpass email" type="email" name="email" placeholder="Email" required>
                    <input class="text w3lpass" type="text" name="username" placeholder="username" required>
                    <input class="text w3lpass" type="password" name="password" placeholder="Password" required>
                    <input class="text w3lpass" type="password" name="password_confirmation" placeholder="Cek Password" required>
                    <input type="submit" value="Registrasi">
                </form>
                <p>Sudah memiliki akun? <a href="login"> Login!</a></p>
            </div>
        </div>
    </div>
    <!-- //main -->
</body>
</html>
