<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SisFo Pelayanan Publik</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/iofrm-theme10.css') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/images/logo.png') }}">
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                                <div class="logo">
                                     <img src="{{ asset('asset/images/logo.png') }}">
                                </div>

						</div>
						
                        <h3>Sistem Informasi Pelayanan Publik</h3>
                        <p>Kemudahan Akses Pelayanan Terpadu Untuk Masyarakat</p>
                        <div class="error-warm">
                        <?php if(isset($_GET['error'])) { ?>
                            <h6 class="error"><?php echo $_GET['error']  ?> </h6>
                        <?php } 
                        ?>
                        </div>
                        <form method="POST" action="login.php">
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button href="layout.blade.php" id="submit" type="submit" class="ibtn">Login</button>
                            </div>
							<p>Belum memiliki account? <a href="#"> Registrasi Disini!</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="../../main/js/jquery.min.js"></script>
<script src="../../main/js/popper.min.js"></script>
<script src="../../main/js/bootstrap.min.js"></script>
<script src="../../main/js/main.js"></script>
</body>
</html>