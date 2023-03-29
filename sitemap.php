<?php
header('Content-type: application/xml');
include "koneksi.php"; //nama file koneksi database Anda
$query = mysqli_query($conn, "SELECT * FROM postingan");

echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
echo "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";
echo " ";
while ($data = mysqli_fetch_array($query)) {
    $judurl = $data['judurl'];
    $judurl = preg_replace("/\s/", "-", $judurl);
    $judurl = strtolower($judurl);
    echo "<url>";
    echo "<loc>".BASEURL."".$judurl."</loc>";
    echo "<lastmod>".$data['xml']."</lastmod>";
    echo "<priority>1.00</priority>";
    echo "</url>";
}
echo "</urlset>";
?>