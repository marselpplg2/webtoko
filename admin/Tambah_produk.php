<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-center text-xl font-semibold mb-6">Tambah Produk</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700">Nama</label>
                <input type="text" class="w-full px-3 py-2 border rounded" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Deskripsi</label>
                <input type="text" class="w-full px-3 py-2 border rounded" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Harga</label>
                <input type="text" class="w-full px-3 py-2 border rounded" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Foto</label>
                <input type="file" class="w-full px-3 py-2 border rounded" />
            </div>
            <div class="text-center">
                <button type="button"  href="admin.php" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Kembali</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>