<?php
include 'koneksi.php';

if (isset($_POST['login'])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_md5 = md5($password);
    // $password_acak = password_hash($password_md5, PASSWORD_DEFAULT);

    // var_dump($password_md5);

    $query = mysqli_query($conn, "SELECT * FROM registrasi WHERE username='$username' AND password='$password_md5'");

    // var_dump($password_md5);
    // menghitung jumlah data yang ditemukan
    $numRows = mysqli_num_rows($query);
    // var_dump($numRows);
    if ($numRows == 1) {
        $aName1 = mysqli_fetch_assoc($query);
        $uname = $aName1['username'];
        echo "<h1>login berhasil, selamat datang " . $uname . "</h1>";
    } else {
        echo "<script>alert('Login gagal');
        window.location.href='loginIndex.php'
        </script>";
    }
}