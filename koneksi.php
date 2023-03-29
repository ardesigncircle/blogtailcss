<?php


define("BASEURL","https://www.webstyles.eu.org/");
define("HOST","localhost");
define("USER","root");
define("PASS","root");
define("DBNAME","dbname");


$conn = new mysqli(HOST,USER,PASS,DBNAME)or die("Koneksi Gagal!");