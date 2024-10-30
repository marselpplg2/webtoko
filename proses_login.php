<?php

include("koneksi.php");

$email = $_POST["email"];
$password = $_POST["password"];

$query = mysqli_query($koneksi, "select * from user where email = '$email'");

$jumlah_data = mysqli_num_rows($query);

if($jumlah_data > 0){
    $data = mysqli_fetch_array($query);

if(password_verify($password, $data['password'])){
    header("Location: index.php");
}else{
    header("Location: login.php?error=username atau password salah");
}
}else{
    header("Location: login.php?error=username atau password salah");
};