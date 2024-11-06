<html>
<head>
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: inline-block;
            width: 70px;
        }
        .form-group input[type="text"],
        .form-group input[type="file"],
        .form-group input[type="number"] {
            width: calc(100% - 80px);
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-group input[type="file"] {
            padding: 3px;
        }
        .form-group button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
        .success-message {
            display: none;
            text-align: center;
            color: green;
            margin-top: 20px;
        }
    </style>
    <script>
        function showSuccessMessage() {
            var message = document.getElementById('success-message');
            message.style.display = 'block';
            setTimeout(function() {
                message.style.display = 'none';
            }, 3000);
        }

        function formatCurrency(input) {
            let value = input.value.replace(/\D/g, ''); // Menghapus semua karakter non-digit
            if (value) {
                input.value = 'Rp. ' + new Intl.NumberFormat().format(value);
            } else {
                input.value = '';
            }
        }

        function parseCurrency(input) {
            let value = input.value.replace(/[^0-9]/g, ''); // Menghapus semua karakter non-digit
            input.value = value; // Menyimpan nilai asli untuk pengiriman form
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Tambah Produk</h2>
        <form id="productForm" method="post" action="Tambah_produk.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" id="nama" name="nama" placeholder="Masukan Nama Produk" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi :</label>
                <input type="text" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi Produk" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga :</label>
                <input type="text" id="harga" name="harga" oninput="formatCurrency(this)" onblur="parseCurrency(this)" placeholder="Masukan Harga Produk" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori : </label>
                <input type="text" id="kategori" name="kategori" placeholder="Masukan Kategori Produk" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto : </label>
                <input type="file" id="foto" name="foto"  required>
            </div>
            <div class="form-group">
                <button type="submit" onclick="showSuccessMessage()">Simpan</button>
            </div>
        </form>
        <div id="success-message" class="success-message">Berhasil Di Tambahkan</div>
    </div>
</body>
</html>