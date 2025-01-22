<?php
#1. Koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nama_tamu = $_POST['nama_tamu'];
$no_identitas = $_POST['no_identitas'];

#3. menulis query
$simpan = "INSERT INTO tamus (nama_tamu, nomor_identitas) VALUES ('$nama_tamu','$no_identitas')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman menggunakan php  
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>