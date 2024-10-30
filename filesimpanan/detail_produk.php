<html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <script>
   let pricePerUnit = 5000;

        function updateTotalPrice() {
            const quantityInput = document.getElementById('quantity');
            let quantity = parseInt(quantityInput.value);

            if (quantity < 1) {
                quantity = 1;
                quantityInput.value = 1;
            }

            const totalPrice = pricePerUnit * quantity;
            document.getElementById('totalPrice').innerText = `Total pesanan : Rp ${totalPrice.toLocaleString('id-ID')}`;
        }

        function selectSize(size) {
            const sizes = document.querySelectorAll('.size-button');
            sizes.forEach(button => {
                if (button.dataset.size === size) {
                    button.classList.add('border-red-500', 'text-red-500');
                    button.classList.remove('border-gray-400', 'text-black');
                } else {
                    button.classList.remove('border-red-500', 'text-red-500');
                    button.classList.add('border-gray-400', 'text-black');
                }
            });

            switch(size) {
                case 'pedas':
                    pricePerUnit = 5000;
                    break;
                case 'original':
                    pricePerUnit = 20000;
                    break;
                case 'sedang':
                    pricePerUnit = 50000;
                    break;
                case 'sangat pedas':
                    pricePerUnit = 100000;
                    break;
            }
            document.getElementById('sizeLabel').innerText = `Size: ${size} kg`;
            updateTotalPrice();
        }
  </script>
 </head>
 <body class="flex justify-center items-center h-screen bg-gray-100">
  <div class="border border-gray-400 p-4 w-3/4 bg-white">
   <div class="flex">
    <div class="w-1/2 border border-gray-400 flex justify-center items-center">
     <img alt="Gambar Produk" class="object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/0PWsdhgoE45dHN7FCcs3pMTqtYWrrqDhwgpNIFkG1OMuyz5E.jpg" width="300"/>
    </div>
    <div class="w-1/2 pl-4">
     <h2 class="text-xl font-semibold">
      Nama produk
     </h2>
     <div class="text-gray-500 h-32 overflow-y-auto">
      <p>
       Produk makanan ini terbuat dari bahan-bahan berkualitas tinggi yang dipilih dengan cermat untuk memberikan rasa yang lezat dan bergizi. Produk ini cocok untuk semua kalangan, baik anak-anak maupun dewasa. Dengan kemasan yang praktis, produk ini mudah dibawa dan disimpan. Produk ini juga telah melalui berbagai uji kualitas untuk memastikan keamanan dan kebersihannya. Nikmati kelezatan dan manfaat gizi dari produk makanan ini setiap hari.
      </p>
      <p>
       Produk ini tersedia dalam berbagai ukuran untuk memenuhi kebutuhan Anda. Anda dapat memilih ukuran yang sesuai dengan kebutuhan Anda, mulai dari 10 kg, 25 kg, 50 kg, hingga 100 kg. Setiap ukuran memiliki harga yang berbeda, sehingga Anda dapat menyesuaikan dengan anggaran Anda. Jangan lewatkan kesempatan untuk mencoba produk makanan ini dan rasakan perbedaannya.
      </p>
     </div>
     <div class="mt-4">
      <span class="font-semibold" id="sizeLabel">
       Size: pilih opsi 
      </span>
      <div class="flex mt-2 space-x-2">
       <button class="size-button border border-red-500 text-red-500 px-2 py-1 rounded" data-size="100" onclick="selectSize('original')">
        original
       </button>
       <button class="size-button border border-gray-400 text-black px-2 py-1 rounded" data-size="50" onclick="selectSize('sedang')">
        sedang
       </button>
       <button class="size-button border border-gray-400 text-black px-2 py-1 rounded" data-size="25" onclick="selectSize('sangat pedas')">
        sangat pedas
       </button>
       <button class="size-button border border-gray-400 text-black px-2 py-1 rounded" data-size="10" onclick="selectSize('pedas')">
        pedas
       </button>
      </div>
     </div>
     <p class="mt-4" id="totalPrice">
      Total pesanan : 
     </p>
     <div class="flex items-center mt-4">
      <span class="mr-2">
       QTY:
      </span>
      <input class="border border-gray-400 w-12 text-center" id="quantity" min="1" oninput="updateTotalPrice()" type="number" value="1"/>
      <button class="ml-4 bg-red-500 text-white px-4 py-2 rounded">
       Checkout
      </button>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>