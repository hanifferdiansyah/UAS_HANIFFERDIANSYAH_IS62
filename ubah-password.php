<?php
session_start();

if(isset($_SESSION['sid'])){
    $login_id = $_SESSION['sid'];
}elseif(isset($_COOKIE['cid'])){
    $login_id = $_COOKIE['cid'];
}

$pesan = "";
if(isset($_POST['tombol'])){
 #1. koneksi
 include("koneksi.php");

 #2. mengambil value input
 $pass1 = md5($_POST['pass1']);
 $pass2 = md5($_POST['pass2']);
 $pass3 = md5($_POST['pass3']);

 #3. validasi
 #3.1. cek password lama
 $sql_cek = "SELECT * FROM logins WHERE password='$pass1' AND id='$login_id'";
 $qry = mysqli_query($koneksi,$sql_cek);
 $cek_pass1 = mysqli_fetch_array($qry);
 if($cek_pass1 == 0){
    #error password lama tidak sesuai
    $pesan = '<div class="alert alert-danger" role="alert"> 
    <i class="fa-solid fa-radiation">
    </i> password lama tidak sesuai!!! </div>' ;
 }elseif($pass2 != $pass3){
    #error password baru dan konfirmasi, password baru tidak sesuai
    $pesan = '<div class="alert alert-danger" role="alert"> 
    <i class="fa-solid fa-radiation">
    </i> Password baru tidak sesuai!!! </div>' ;
 }else{
    #proses ubah password
    $sql_ubah = "UPDATE logins SET password='$pass2' WHERE id='$login_id'";
    $qry_ubah = mysqli_query($koneksi,$sql_ubah);

    //header("location:logout.php");

    $pesan = ' <div class="alert alert-success" role="alert"> 
    <i class="fa-regular fa-thumbs-up">
    </i> Ubah Password Berhasil </div>' ;
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS_HANIFFERDIANSYAH_IS62</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<?php
    include("navbar.php")
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <?=$pesan?>
            <div class="card">
            <div class="card-header text-center">
                <h3>Ubah Password</h3>
            </div>
            <div class="card-body">
            <form method="post" action="ubah-password.php">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password Lama</label>
    <input type="password" name="pass1" class="form-control" id="exampleInputPassword1" >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password Baru</label>
    <input type="password" name="pass2" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Konfirmasi Password Baru</label>
    <input type="password" name="pass3" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="tombol" class="btn btn-primary">Ubah Password</button>
</form>
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="js/all.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>