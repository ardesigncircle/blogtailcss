<?php
session_start();
if(!$_SESSION['usern']){
    header("Location: login.php");
}
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Styles Web Programming - Webstyles</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="tailwind.css" type="text/css" media="all" />
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="dist/simplemde.min.css" type="text/css" media="all" />
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
            <div class="p-3 flex ml-auto">
                <a href="logout.php">
                    <button class="p-3 rounded-lg bg-pink-600 border-4 border-pink-500 font-bold text-white">Keluar</button>
                </a>
            </div>
        </div>
    </div>
    <div class="lg:px-10 lg:py-0 md:px-5">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <div class="col-span-3 p-5">
                <div class="text-2xl">
                    <h1 class="font-bold">Buat Postingan</h1>
                </div>
                <?php echo $_SESSION['cssAlert']; ?>
                <div class="form-items">
                    <form action="proses/prosesMake.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="grid-cols-1 md:grid-cols-3 lg:grid-cols-3 grid py-4">
                            <div class="form-group md:mr-3 lg:mr-3">
                                <label for="Judul">Judul</label><br>
                                <input type="text" name="judul" id="judul" class="form-input p-2 rounded-sm w-full" placeholder="Judul" />
                            </div>
                            <div class="form-group md:mr-3 lg:mr-3">
                                <label for="Taggar">Taggar</label><br>
                                <input type="text" name="taggar" id="taggar" class="form-input p-2 rounded-sm w-full" placeholder="Taggar" />
                            </div>
                            <div class="form-group">
                                <label for="XML">XML Date</label><br>
                                <input type="text" name="xml" id="xml" class="form-input p-2 rounded-sm w-full" value="<?php echo date("Y-m-d")."T".date("H:i:s")."Z"; ?>
                                " />
                            </div>
                            <div class="form-group md:mr-3 lg:mr-3">
                                <label for="Images">Gambar</label><br>
                                <input type="file" name="gambar" id="gambar" class="form-input p-2 rounded-sm w-full" />
                            </div>
                            <div class="form-group md:mr-3 lg:mr-3">
                                <label for="url">Internal URL</label><br>
                                <input type="text" name="judurl" id="judurl" class="form-input p-2 rounded-sm w-full" placeholder="Judul URL" />
                            </div>
                            <div class="form-group md:mr-3 lg:mr-3">
                                <label for="meta">Meta Description</label><br>
                                <input type="text" name="meta" id="meta" class="form-input p-2 rounded-sm w-full" placeholder="Tulis Deskripsi" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Area Tulis">Area Ketik</label>
                            <textarea type="text" name="artikel" id="marked" class="textarea rounded-full" placeholder="Tulis Artikel"></textarea>
                        </div>
                        <button type="submit" class="p-4 rounded-md bg-blue-700 text-white font-bold">Publikasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="dist/simplemde.min.js" type="text/javascript" charset="utf-8"></script>
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementById("marked")
        });
    </script>
</body>
</html>