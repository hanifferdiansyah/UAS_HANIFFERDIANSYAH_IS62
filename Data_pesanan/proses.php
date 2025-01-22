<?php
#1. Koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$nama_tamu = $_POST['nama_tamu'];

#3. menulis query
$simpan = "INSERT INTO pemesanans (tanggal_checkin, tanggal_checkout, tamu_id) VALUES ('$checkin','$checkout','$nama_tamu')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman menggunakan php
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>