<?php 

// session_start();
include 'koneksi.php';

if (isset($_POST['register'])) {
    
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_md5 = md5($password);

    //$password_acak = password_hash($password_md5, PASSWORD_DEFAULT);

    $sql = "INSERT INTO registrasi (fullname, username, password)
    VALUES ('$fullname', '$username', '$password_md5')";

    if ($conn->query($sql) === TRUE) {
        echo ("	<script>alert('registrasi berhasil'); window.location.href='loginIndex.php'</script>");
    } else {
        echo ("	<script>alert('data kosong'); window.location.href='SignUp.php'</script>");
    }

    // $conn->close();

}