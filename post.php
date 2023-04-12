<?php


include "koneksi.php";
include_once("Parsedown.php");
$url = $_GET['url'];
$url = preg_replace("/-/", " ", $url);
$query = "SELECT * FROM postingan WHERE judurl = '$url'";
$sql = mysqli_query($conn,$query);
$row = mysqli_fetch_array($sql);
$artikel = $row['artikel'];
$parsedown = new Parsedown();
$md = $parsedown->text($artikel);

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?php echo $row['judul']; ?> - Webstyles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $row['metaDescription']; ?>">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP , C++, REACTJS,NODEJS">
    <meta name="author" content="Muhamad Ardiansyah">
    <link rel="icon" type="image/png" href="<?php echo BASEURL; ?>logo.png" />
    <link rel="stylesheet" href="<?php echo BASEURL; ?>style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo BASEURL; ?>tailwind.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo BASEURL; ?>newstyles.css" type="text/css" media="all" />
    <link href="<?php echo BASEURL; ?>themes/css/monokai.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body class="max mx-auto  bg-gray-200">
    <div class="lg:px-10 lg:py-5 p-3 lg:container mx:auto ">
        <div class="grid grid-cols-2 gap-2">
            <div class="p-3">
                <div class="flex">
                    <img class="object-cover mt-1" width="55" height="40" src="<?php echo BASEURL; ?>logo.png" alt="" />
                    <div class="p-4">
                        <h1 class="text-lg font-bold">Web<span class="text-pink-600">styles</span></h1>
                    </div>
                </div>
            </div>
            <!---
            <div class="p-3 flex ml-auto">
                <a href="#">
                    <button class="p-3 rounded-lg bg-pink-600 border-4 border-pink-500 font-bold text-white">Get Started</button>
                </a>

                <a class="ml-2 hidden md:block lg:block" href="#">
                    <button class="p-3 rounded-lg border-4 border-pink-500 font-bold text-pink-500 text-white">Create a Account</button>
                </a>
            </div>
            --->
        </div>
    </div>
    <div class="mb-12 lg:px-10 lg:py-0 md:px-5">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <div class="col-span-2 p-4">
                <div class="w-full border-white lg:max-w-full lg:flex lg:flex-col">
                    <div class="h-48 lg:h-64 md:h-56 lg:w-full bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" title="Woman holding a mug">
                        <img src="<?php echo BASEURL; ?>gambar/<?php echo $row['gambar']; ?>" alt="" />
                    </div>
                    <div class=" border-gray-400 lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-5 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-sm text-gray-600 flex items-center">
                                <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                </svg><?php echo $row['taggar']; ?>
                            </p>
                            <div class="text-gray-700 h1 h2 h3 h4 h5 h6">
                                <?php echo $md; ?>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img class="w-10 h-10 rounded-full mr-4" src="<?php echo BASEURL; ?>logo.png" alt="Avatar of Jonathan Reinink">
                            <div class="text-sm">
                                <p class="text-gray-900 leading-none">
                                    <?php echo $row['penulis']; ?>
                                </p>
                                <p class="text-gray-600">
                                    <?php echo $row['dates']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php

            $queryies = mysqli_query($conn, "SELECT * FROM postingan ORDER BY RAND() LIMIT 2");
            while ($r = mysqli_fetch_array($queryies)) {



                ?>
                <div class="p-4">
                    <div class="w-full border-white lg:max-w-full lg:flex lg:flex-col">
                        <div class="h-48 lg:h-56 lg:w-full bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" title="Woman holding a mug">
                            <img src="<?php echo BASEURL; ?>gambar/<?php echo $r['gambar']; ?>" alt="<?php echo $r['judul']; ?>" />
                        </div>
                        <div class=" border-gray-400 lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-5 flex flex-col justify-between leading-normal">
                            <div class="mb-8">
                                <p class="text-sm text-gray-600 flex items-center">
                                    <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                    </svg>
                                    <?php echo $r['taggar']; ?>
                                </p>
                                <div class="text-gray-900 font-bold text-xl mb-2">
                                    <a href="<?php
                                        $judurl = $r['judurl'];
                                        $judurl = preg_replace("/\s/", "-", $judurl);
                                        $judurl = strtolower($judurl);
                                        echo $judurl; ?>">  <?php echo $row['judul']; ?></a>
                                </div>
                                <p class="text-gray-700 text-base">
                                    <?php echo substr($r['metaDescription'], 0, 175); ?>
                                </p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full mr-4" src="<?php echo BASEURL; ?>logo.png" alt="Avatar of Jonathan Reinink">
                                <div class="text-sm">
                                    <p class="text-gray-900 leading-none">
                                        <?php echo $row['penulis']; ?>
                                    </p>
                                    <p class="text-gray-600">
                                        <?php echo $row['dates']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
        </div>
    </div>
    <div class="lg:px-10 lg:py-5 md:px-5 bg-gray-600 text-white">
        <div class="grid grid-cols-1">
            <div class="p-5">
                © 2023 Webstyles. All rights reserved
            </div>
        </div>
    </div>
    <script src="<?php echo BASEURL; ?>dist/rainbow.js"></script>
    <script src="<?php echo BASEURL; ?>src/language/generic.js"></script>
    <script src="<?php echo BASEURL; ?>src/language/html.js"></script>
    <script src="<?php echo BASEURL; ?>src/language/css.js"></script>
    <script src="<?php echo BASEURL; ?>src/language/php.js"></script>
    <script src="<?php echo BASEURL; ?>src/language/javascript.js"></script>
    <script>

        const res = document.querySelectorAll('pre');

        var name = "class";
        var value = "lang-html lang-css lang-javascript lang-php";
        res.forEach(setRes => {
            setRes.setAttribute(name, value);
        })
    </script>
</body>
</html>
