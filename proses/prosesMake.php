<?php
include "../koneksi.php";



date_default_timezone_set("Asia/Jakarta");
$judul = $_POST['judul'];
$taggar = $_POST['taggar'];
$meta = $_POST['meta'];
$xml = $_POST['xml'];
$gambar = $_FILES['gambar']['name'];
$url = $_POST['judurl'];
$artikel = $_POST['artikel'];
$penulis = "Muhamad Ardiansyah";
$dates = date("M Y, H:i:s");
$ekstensi_diperbolehkan = array('png', 'jpg');
$gambar = $_FILES['gambar']['name'];
$x = explode('.', $gambar);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['gambar']['size'];
$file_tmp = $_FILES['gambar']['tmp_name'];


if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    if ($ukuran < 1044070) {
        move_uploaded_file($file_tmp, '../gambar/'.$gambar);
        $query = "INSERT INTO postingan VALUES('','$judul','$url','$meta','$taggar','$gambar','$xml','$penulis','$artikel','$dates')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            session_start();
            $alertCSS = '<div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert"><p class="font-bold">Success</p><p>Data berhasil Ditambahkan.</p></div>';
            $_SESSION['cssAlert'] = $alertCSS;
            header("Location: ../buat-postingan.php");

        } else {
            session_start();
            $alertCSS = '<div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert"><p class="font-bold">Gagal</p><p>Data Gagal Ditambahkan.</p></div>';
            $_SESSION['cssAlert'] = $alertCSS;
            header("Location: ../buat-postingan.php");
        }
    } else {
        echo 'UKURAN FILE TERLALU BESAR';
    }
} else {
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}