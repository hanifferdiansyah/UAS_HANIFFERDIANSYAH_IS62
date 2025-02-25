<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>

<body>

    <?php
    include_once('../navbar.php');
    ?>


    <div class="container">
        <div class="row mt-5">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-start">Data Pemesanan</h3>
                        <p class="float-end"><a class="btn btn-primary" href="pesan.php"><i class="fa-solid fa-square-plus"></i> Tambah Data</a></p>
                    </div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal Checkin</th>
                                    <th scope="col">Tanggal Checkout</th>
                                    <th scope="col">Nama Tamu</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                #1. Koneksikan file ini
                                include("../koneksi.php");

                                #2. menulis query
                                $tampil = "SELECT * FROM pemesanans";

                                #3. jalankan query
                                $proses = mysqli_query($koneksi, $tampil);

                                #4. looping data dari database
                                $nomor = 1;
                                foreach ($proses as $data) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $nomor++ ?></th>
                                        <td><?= $data['tanggal_checkin'] ?></td>
                                        <td><?= $data['tanggal_checkout'] ?></td>
                                        <td><?= $data['tamu_id'] ?></td>

                                       
                                        
                                        <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                            <a class="btn btn-success btn-sm" href=""><i class="fa-solid fa-pen-to-square"></i></a>

                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Yakin Data  ingin dihapus?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                                                            <a href="" class="btn btn-danger">HAPUS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

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