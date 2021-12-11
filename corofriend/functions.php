<?php 
$conn = mysqli_connect("localhost", "root", "", "corofriend");

function query ($value) {
    global $conn;
    $arrays = [];
    $result = mysqli_query($conn, $value);
    while ($array = mysqli_fetch_assoc($result)) {
        $arrays[] = $array;
    }
    return $arrays;
}

function registration($value) {
    global $conn;

    $username = strtolower(stripslashes($value["username"]));
    $password = mysqli_real_escape_string($conn, $value["password"]);
    $confirm = mysqli_real_escape_string($conn, $value["password2"]);

    $check = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($check)) {
        echo "<script>
        alert('Username existed already !')
        </script>";
        return false;
    }

    if ($password !== $confirm) {
        echo "<script>
        alert('Password does not match !')
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

?>