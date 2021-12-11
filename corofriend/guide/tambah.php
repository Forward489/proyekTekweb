<?php 
    // var_dump($_POST);
require 'functions.php';

    if (isset($_POST["submit"])) {
        if (add($_POST) > 0) {
            echo "<script>alert('Data berhasil ditambahkan !');
            document.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>alert('Data gagal ditambahkan !');
            document.location.href = 'index.php';
            </script>";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Tambah Data Mobil</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="serial">Serial : </label>
                <input type="text" name="serial" id="serial" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="vendor">Vendor : </label>
                <input type="text" name="vendor" id="vendor" required>
            </li>
            <li>
                <label for="origin">Origin : </label>
                <input type="text" name="origin" id="origin" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </li>
        </ul>

    </form>
</body>
</html>