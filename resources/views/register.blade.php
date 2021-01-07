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
                <form action="#" method="post">
                    <input class="text w3lpass" type="text" name="nama" placeholder="Nama Lengkap" required>
                    <input class="text w3lpass number" type="number" name="telp" placeholder="No. HP" required>
                    <input class="text w3lpass" type="text" name="jalan" placeholder="Alamat" required>
                    <input class="text w3lpass email" type="email" name="email" placeholder="Email" required>
                    <input class="text w3lpass" type="password" name="password" placeholder="Password" required>
                    <input class="text w3lpass" type="password" name="cek_password" placeholder="Cek Password" required>
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions.</span>
                            </label>
                            <div class="clear"> </div>
                    </div>
                    <input type="submit" value="SIGNUP">
                </form>
                <p>Sudah memiliki akun? <a href="login_form"> Login!</a></p>
            </div>
        </div>
    </div>
    <!-- //main -->
</body>
</html>
