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

function changePass($value)
{
    global $conn;
    $old_username = $value["old_username"];

    $username = strtolower(stripslashes($value["username"]));
    $password = mysqli_real_escape_string($conn, $value["password"]);

    $password_new = mysqli_real_escape_string($conn, $value["password_new"]);
    $confirm = mysqli_real_escape_string($conn, $value["password2"]);

    $check = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    $check2 = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    $old_password = mysqli_query($conn, "SELECT password FROM user WHERE username = '$old_username'");
    $old_password = mysqli_fetch_assoc($old_password);
    $check2 = mysqli_fetch_assoc($check2);

    
    if (mysqli_fetch_assoc($check)) {
        if (!$check2["username"] == $old_username) {
            echo "<script>
            alert('Username existed already !')
            </script>";
            return false;
        }
    }

    if (!password_verify($password, $old_password["password"])) {
        echo "<script>
        alert('Old password doesn't match !')
        </script>";
        return false;
    }

    if ($password_new !== $confirm) {
        echo "<script>
        alert('New password does not match !')
        </script>";
        return false;
    }

    $password_new = password_hash($password_new, PASSWORD_DEFAULT);
    
    mysqli_query($conn, "UPDATE user SET username = '$username', password = '$password_new' WHERE username='$old_username'");

    $_SESSION["user"] = $username;

    return mysqli_affected_rows($conn);
}


?>
