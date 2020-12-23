<?php 
    session_start();
    include("controller/connection.php");
	if (!(isset($_SESSION["id"]))) {
		header("Location: login.php");
    }
    $id = $_SESSION["id"];
    $detail = "SELECT * FROM `user` WHERE `id` = '$id'";
    $query = mysqli_query($db, $detail);

    $data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile | </title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
</head>


<body style="background-color:#333;">

<nav class="<?php if ($_SESSION["color"] == "dark") { echo "navbar navbar-dark bg-dark";} else { echo "navbar navbar-dark bg-dark";}?>">
        <a class="navbar-brand" href="index.php"></a>
        <form class="form-inline">
        
    
        <div class="navbar-expand">
        <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Selamat Datang, <?php echo $_SESSION['name'] ?>
        </a>

            
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="profile.php">Profile</a>
            <a class="dropdown-item" href="controller/logout.php">Logout</a>
        </div>
        </li>
        </ul>
        </div>
        </form>
    </nav>



<section class="container mt-5">
    <div class="row justify-content-center">
        <div style="width: 700px;">
            <h4 style="text-align: center; color:white">Profile</h4>
            <br>
        <form action="controller/editprofile.php" method="post">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" style="color:white;">Email</label>
        <div class="col-sm-10" style="color:white;">
            <?php echo $data['email']; ?>
        </div>

        </div>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label" style="color:white;">Nama</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="nama" value="">
        </div>


        </div>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label" style="color:white;">Nomor Handphone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nohp" value="">
        </div>

        </div>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label" style="color:white;">Alamat</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="alamat" value="">
        </div>


        </div>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label" style="color:white;">Kelurahan</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="kelurahan" value="">
        </div>

        </div>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label" style="color:white;">kode pos</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="kodepos" value="">
        </div>


        </div>
        <hr>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" style="color:white;">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password" require>
        </div>


        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" style="color:white;">Password Confirm</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="cekpassword" require>
        </div>

        </div>
        <div class="form-group row">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
            <a href="profile.php" class="btn btn-secondary btn-block">Cancel</a>
        </div>
                
        </form>
        </div>   
        </div> 


</section>
<blockquote class="blockquote text-center mt-5">
<footer class="blockquote-footer">&copy; 2020 Copyright; </footer>
</blockquote>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>
</html>
