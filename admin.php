<html>
<head>
    <title>Admin Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Times New Roman', cursive, sans-serif;
        }
        .container {
            border: 4px solid black;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 400px;
            position: relative;
        }
        .container h1 {
            margin-bottom: 20px;
        }
        .button {
            background-color: #00CFFF;
            border: none;
            border-radius: 10px;
            color: white;
            padding: 10px 20px; /* Reduced padding */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px; /* Reduced font size */
            margin: 10px 0;
            cursor: pointer;
            width: 120px; /* Reduced width */
            height: 40px; /* Reduced height */
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }
        .vertical-line {
            position: absolute;
            top: 109px; /* Adjusted to avoid the "ADMIN" text */
            bottom: 20px;
            left: 50%;
            width: 2px;
            background-color: black;
            transform: translateX(-50%);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="vertical-line"></div>
        <h1>ADMIN</h1>
        <div class="button-container">
            <a href="admin/Tambah_produk1.php" class="button">Tambah Produk</a>
            <a href="admin/1.php" class="button">Penjualan</a>
        </div>
        <div class="button-container">
            <a href="admin/2.php" class="button">Update Produk</a>
            <a href="admin/3.php" class="button">Detail Penjualan</a>
        </div>
        <div class="button-container">
            <a href="admin/4.php" class="button">Produk</a>
            <a href="admin/5.php" class="button">Update Status Penjualan</a>
        </div>
    </div>
</body>
</html>