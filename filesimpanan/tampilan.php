<html>
 <head>
  <title>
   Product Page
  </title>
  <style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 100%;
            max-width: 800px; /* Set a smaller max-width for the container */
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #000;
            position: relative;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
        }
        .header input[type="text"] {
            width: 70%; /* Increase the width to make the input box wider */
            padding: 5px;
            border: 1px solid #000;
            margin-left: 10px; /* Add margin to the left to create space from the text */
            text-align: center; /* Center the text inside the input box */
        }
        .header .search-bar {
            display: flex;
            align-items: center;
            flex-grow: 1;
        }
        .header .search-bar input[type="text"] {
            margin-right: 10px;
        }
        .header .search-bar i {
            font-size: 20px;
        }
        .header .account {
            display: flex;
            align-items: center;
        }
        .header .account i {
            font-size: 20px;
            margin-right: 10px;
        }
        .products-container {
            height: 400px; /* Set a fixed height for the container */
            overflow-y: scroll; /* Enable vertical scrolling */
            position: relative;
        }
        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .product {
            width: 30%; /* Adjust the width to fit three products per row */
            border: 1px solid #000;
            margin-bottom: 20px;
            padding: 10px;
            text-align: center;
        }
        .product img {
            width: 100%;
            height: 100px; /* Reduce the height of the image */
            border: 1px solid #000;
        }
        .product .name {
            font-weight: bold;
            margin: 10px 0;
        }
        .product .details {
            color: #666;
            margin-bottom: 10px;
        }
        .product .price {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .product .buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .product .buttons button {
            padding: 5px 10px;
            border: 1px solid #000;
            background-color: #fff;
            cursor: pointer;
            font-family: 'Times New Roman', Times, serif; /* Change font to Times New Roman */
        }
        .product .buttons .promo {
            background-color: #ff0000;
            color: #fff;
            border: none;
        }
  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body>
  <div class="container">
   <div class="header">
    <div class="account">
     <i class="fas fa-user-circle">
     </i>
     <span>
      Nama akun
     </span>
    </div>
    <div class="search-bar">
     <input placeholder='usaha "wir"' type="text"/>
     <i class="fas fa-search">
     </i>
    </div>
   </div>
   <div class="products-container">
    <div class="products">
     <div class="product">
      <img alt="Placeholder image of the product" height="150" src="https://storage.googleapis.com/a1aa/image/8byhgB8CMLaNBN02Rpr9HulbnMlR1s1QYOkDSwBXIvUf1mzJA.jpg" width="150"/>
      <div class="name">
       Nama Produk
      </div>
      <div class="details">
       Detail penjelasan produk
      </div>
      <div class="price">
       Rp 5.000
      </div>
      <div class="buttons">
       <button>
        beli
       </button>
       <button class="promo">
        Keranjang
       </button>
      </div>
     </div>
     <div class="product">
      <img alt="Placeholder image of the product" height="150" src="https://storage.googleapis.com/a1aa/image/8byhgB8CMLaNBN02Rpr9HulbnMlR1s1QYOkDSwBXIvUf1mzJA.jpg" width="150"/>
      <div class="name">
       Nama Produk
      </div>
      <div class="details">
       Detail penjelasan produk
      </div>
      <div class="price">
       Rp 5.000
      </div>
      <div class="buttons">
       <button>
        beli
       </button>
       <button class="promo">
        Keranjang
       </button>
      </div>
     </div>
     <div class="product">
      <img alt="Placeholder image of the product" height="150" src="https://storage.googleapis.com/a1aa/image/8byhgB8CMLaNBN02Rpr9HulbnMlR1s1QYOkDSwBXIvUf1mzJA.jpg" width="150"/>
      <div class="name">
       Nama Produk
      </div>
      <div class="details">
       Detail penjelasan produk
      </div>
      <div class="price">
       Rp 5.000
      </div>
      <div class="buttons">
       <button>
        beli
       </button>
       <button class="promo">
        Keranjang
       </button>
      </div>
     </div>
     <div class="product">
      <img alt="Placeholder image of the product" height="150" src="https://storage.googleapis.com/a1aa/image/8byhgB8CMLaNBN02Rpr9HulbnMlR1s1QYOkDSwBXIvUf1mzJA.jpg" width="150"/>
      <div class="name">
       Nama Produk
      </div>
      <div class="details">
       Detail penjelasan produk
      </div>
      <div class="price">
       Rp 5.000
      </div>
      <div class="buttons">
       <button>
        beli
       </button>
       <button class="promo">
        Keranjang
       </button>
      </div>
     </div>
     <div class="product">
      <img alt="Placeholder image of the product" height="150" src="https://storage.googleapis.com/a1aa/image/8byhgB8CMLaNBN02Rpr9HulbnMlR1s1QYOkDSwBXIvUf1mzJA.jpg" width="150"/>
      <div class="name">
       Nama Produk
      </div>
      <div class="details">
       Detail penjelasan produk
      </div>
      <div class="price">
       Rp 5.000
      </div>
      <div class="buttons">
       <button>
        beli
       </button>
       <button class="promo">
        Keranjang
       </button>
      </div>
     </div>
     <div class="product">
      <img alt="Placeholder image of the product" height="150" src="https://storage.googleapis.com/a1aa/image/8byhgB8CMLaNBN02Rpr9HulbnMlR1s1QYOkDSwBXIvUf1mzJA.jpg" width="150"/>
      <div class="name">
       Nama Produk
      </div>
      <div class="details">
       Detail penjelasan produk
      </div>
      <div class="price">
       Rp 5.000
      </div>
      <div class="buttons">
       <button>
        beli
       </button>
       <button class="promo">
        Keranjang
       </button>
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>