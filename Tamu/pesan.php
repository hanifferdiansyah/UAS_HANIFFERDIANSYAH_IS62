<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS_HANIFFERDIANSYAH_IS62</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>

<?php 
include_once('../navbar.php');
?>


<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
            <div class="card-header">
                <center><h3>Tambah Daftar Tamu</h3></center>
            </div>
            <div class="card-body">

                <form action="proses.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Tamu</label>
                        <input type="text" name="nama_tamu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nomor Identitas</label>
                        <input type="text" name="no_identitas" class="form-control" id="exampleInputPassword1">
                    </div>

                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>