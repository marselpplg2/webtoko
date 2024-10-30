<?php
session_start();
include 'koneksi.php'; // Sertakan file koneksi

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Cek apakah email sudah ada
    $stmt = $koneksi->prepare("SELECT email FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $error = "Email sudah terdaftar.";
    } else {
        // Hash password sebelum disimpan
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Simpan user baru ke database
        $stmt = $koneksi->prepare("INSERT INTO user (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $hashed_password);

        if ($stmt->execute()) {
            $success = "Registrasi berhasil! Silakan login.";
        } else {
            $error = "Terjadi kesalahan. Coba lagi. " . mysqli_error($koneksi);
        }
    }

    $stmt->close();
}

$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .login-container {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        .login-container h2 {
            color: #888;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .login-container label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .login-container .login-button {
            background-color: #ffa500;
            color: #fff;
            padding: 10px;
            border: none;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
        }
        .login-container .login-button:hover {
            background-color: #e69500;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>----- Silakan Buat Akun -----</h2>
        <?php if ($error) { echo "<p class='error'>$error</p>"; } ?>
        <?php if ($success) { echo "<p class='success'>$success</p>"; } ?>
        <form action="" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="nama@email.com" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukan Password Anda" required>
            <button type="submit" class="login-button">BUAT AKUN SEKARANG JUGA</button>
        </form>
        <p>Sudah memiliki akun? <a href="login.php"> Sign in</a></p>
    </div>
</body>
</html>