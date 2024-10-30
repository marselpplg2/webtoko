<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Times New Roman', sans-serif;
            background-color: #f5f5f5;
        }
        .login-container {
            width: 300px;
            padding: 20px;
            border: 1px solid #000;
            background-color: #fff;
            text-align: center;
            position: relative;
        }
        .separator {
            margin: 20px 0;
            color: #888;
        }
        .input-group {
            text-align: left;
            margin: 10px 0;
        }
        .input-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 93%;
            padding: 10px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: orange;
            border: none;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
            margin-top: 20px;
        }
        .error-message {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<?php
session_start();
include 'koneksi.php'; // Sertakan file koneksi

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Cek kredensial pengguna
    $stmt = $koneksi->prepare("SELECT password, role FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password, $role);
        $stmt->fetch();

        // Verifikasi password
        if (password_verify($password, $hashed_password)) {
            // Login berhasil
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $role;

            // Redirect berdasarkan role
            if ($role === 'admin') {
                header("Location: admin.php");
            } else {
                header("Location: index.php");
            }
            exit();
        } else {
            $error_message = "Username atau password salah.";
        }
    } else {
        $error_message = "Username atau password salah.";
    }

    $stmt->close();
}

$koneksi->close();
?>

    <form action="" method="post">
        <div class="login-container">
            <div class="separator">----- Silakan Masukan Akun Anda -----</div>
            <?php if ($error_message) { echo "<p class='error-message'>$error_message</p>"; } ?>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="nama@email.com" required/>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Masukan Password Anda" required/>
            </div>
            <p>Belum memiliki akun? <a href="register.php">Sign up</a></p>
            <button type="submit" class="submit-btn">MASUK SEKARANG JUGA</button>
        </div>
    </form>
</body>
</html>