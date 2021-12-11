<?php
$conn = mysqli_connect("localhost", "root", "", "mobil");

$result = mysqli_query($conn, "SELECT * FROM listmobil");
$no = 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" cellpadding = "10" cellspacing = "0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Serial</th>
            <th>Nama Mobil</th>
            <th>Vendor</th>
            <th>Origin</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $no++;?></td>
            <td>
                <a href="">Ubah</a> | 
                <a href="">Delete</a>
            </td>
            <td><img src="pics/<?php echo $row["gambar"]; ?>" width="175"></td>
            <td><?= $row["serial"];?></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["vendor"];?></td>
            <td><?= $row["origin"];?></td>
        </tr>
        <?php endwhile ; ?>

    </table>
</body>
</html>