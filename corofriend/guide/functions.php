<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<?php
$conn = mysqli_connect("localhost", "root", "", "mobil");

function query($value)
{
    global $conn;
    $result = mysqli_query($conn, $value);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function add($data) {
    global $conn;
    $serial = htmlspecialchars($data["serial"]);
    $nama = htmlspecialchars($data["nama"]);
    $vendor = htmlspecialchars($data["vendor"]);
    $origin = htmlspecialchars($data["origin"]);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO listmobil
              VALUES ('', '$serial', '$nama', '$vendor', '$origin', '$gambar')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        echo "Query Berhasil !";
    } else {
        echo "Query Gagal !";
        echo "<br>";
        echo mysqli_error($conn);
    }
    return mysqli_affected_rows($conn);
}

function upload () {
    $fileName = $_FILES['gambar']['name'];
    $fileSize = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>alert('Pick a picture first')</script>";
        return false;
    }
    $valid_format = ['jpg', 'jpeg', 'png'];
    $pic_extension = explode('.', $fileName);
    $pic_extension = strtolower(end($pic_extension));

    if (!in_array($pic_extension, $valid_format)) {
        echo "<script>alert('The format isn't valid, valid formats are .jpg, .jpeg, and .png')</script>";
        return false;
    }

    if ($fileSize > 1000000) {
        echo "<script>alert('The file is too large')</script>";
        return false;
    }

    $new_file_name = uniqid();
    $new_file_name = $new_file_name . '.' . $pic_extension;

    move_uploaded_file($tmpName, 'pics/'.$new_file_name);
    return $new_file_name;
}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM listmobil WHERE id = $id ");

    return mysqli_affected_rows($conn);
}

function update($data)
{
    global $conn;
    $id = $data["id"];
    $serial = htmlspecialchars($data["serial"]);
    $nama = htmlspecialchars($data["nama"]);
    $vendor = htmlspecialchars($data["vendor"]);
    $origin = htmlspecialchars($data["origin"]);
    $prev_pic = htmlspecialchars($data["gambarLama"]);
    
    if ( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $prev_pic;
    }
    else {
        $gambar = upload();
    }

    // $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE listmobil
              SET 
              nama='$nama',
              serial='$serial',
              vendor='$vendor',
              origin='$origin',
              gambar='$gambar'
              WHERE id = $id";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        echo "Query Berhasil !";
    } else {
        echo "Query Gagal !";
        echo "<br>";
        echo mysqli_error($conn);
    }
    return mysqli_affected_rows($conn);

}

function search($keyword) {
    $query = "SELECT * FROM listmobil WHERE nama LIKE '%$keyword%' OR 
    serial LIKE '%$keyword%' OR 
    vendor LIKE '%$keyword%' OR 
    origin LIKE '%$keyword%'";
    return query($query);
}

function registration($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $confirm = mysqli_real_escape_string($conn, $data["password2"]);

    $check = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if ( mysqli_fetch_assoc($check)) {
        echo "<script>alert('Username already existed')</script>";
        return false;
    }

    if ( $password !== $confirm ) {
        echo "<script>alert('Password does not match')</script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}
?>