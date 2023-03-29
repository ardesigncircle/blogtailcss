<?php

include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="My Portofolio Ardesign - Desain Web, Web Undangan Pernikahan, Web Programming">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Muhamad Ardiansyah">
    <title>Styles Web Programming - Webstyles</title>
    <link rel="icon" type="image/png" href="logo.png" />
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="tailwind.css" type="text/css" media="all" />
</head>
<body class="max mx-auto  bg-gray-200">
    <div class="lg:px-10 lg:py-5 p-3 lg:container mx:auto ">
        <div class="grid grid-cols-2 gap-2">
            <div class="p-3">
                <div class="flex">
                    <img class="object-cover mt-1" width="55" height="40" src="logo.png" alt="" />
                    <div class="p-4">
                        <h1 class="text-lg font-bold">Web<span class="text-pink-600">styles</span></h1>
                    </div>
                </div>
            </div>
            <!--
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
    <div class="lg:px-12 p-6 text-center">
        <h2 class="text-xl md:text-2xl lg:text-4xl font-bold">
            Pencapaian Adalah Bukti, dan Proses sebagai Landasan! Selamat Datang :)
        </h2>
        <p>
            Belajarlah selagi mampu. Tetap Optimis dan semangat. Meraih cita - cita adalah hasil utama yang akan kita tekuni!
        </p>
    </div>
    <div class="mb-12 lg:px-10 lg:py-5 md:px-5">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <?php 
            
            $query = mysqli_query($conn,"SELECT * FROM postingan ORDER BY id DESC");
            while($row = mysqli_fetch_array($query)){
                
            
            
            ?>
            <div class="p-4">
                <div class="w-full border-white lg:max-w-full lg:flex lg:flex-col">
                    <div class="h-48 lg:h-56 lg:w-full bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" title="Woman holding a mug">
                        <img src="<?php echo BASEURL; ?>gambar/<?php echo $row['gambar']; ?>" alt="" />
                    </div>
                    <div class=" border-gray-400 lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-5 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-sm text-gray-600 flex items-center">
                                <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                </svg>
                                <?php echo $row['taggar']; ?>
                            </p>
                            <div class="text-gray-900 font-bold text-xl mb-2">
                              <a href="<?php 
                    $judurl = $row['judurl'];
                    $judurl =preg_replace("/\s/","-",$judurl);
					$judurl = strtolower($judurl);
                    echo $judurl; ?>">  <?php echo $row['judul']; ?></a>
                            </div>
                            <p class="text-gray-700 text-base">
                                                                  <?php echo substr($row['metaDescription'],0,175); ?>
                            </p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-10 h-10 rounded-full mr-4" src="logo.png" alt="Avatar of Jonathan Reinink">
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
            <?php } ?>
        </div>
    </div>
    <div class="lg:px-10 lg:py-5 md:px-5 bg-pink-600 text-white">
        <div class="grid grid-cols-1">
            <div class="p-5">
                © 2023 Webstyles. All rights reserved
            </div>
        </div>
    </div>
</body>
</html>