<html>
 <head>
  <title>
   Product Page
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: scroll;
        }
        .header {
            width: 100%;
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #000;
        }
        .header .logo {
            width: 40px;
            height: 40px;
            border: 1px solid #000;
            border-radius: 50%;
            margin-right: 10px;
        }
        .header .account-name {
            margin-right: auto;
        }
        .header .search-bar {
            display: flex;
            align-items: center;
        }
        .header .search-bar input {
            padding: 5px;
            border: 1px solid #000;
            margin-right: 5px;
        }
        .header .search-bar .search-icon {
            font-size: 20px;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            padding: 20px;
        }
        .product-card {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        .product-card img {
            width: 100px;
            height: 100px;
            border: 1px solid #000;
            margin-bottom: 10px;
        }
        .product-card .product-name {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .product-card .product-details {
            margin-bottom: 10px;
        }
        .product-card .product-price {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .product-card .product-buttons {
            display: flex;
            justify-content: space-between;
        }
        .product-card .product-buttons button {
            padding: 5px 10px;
            border: 1px solid #000;
            cursor: pointer;
        }
        .product-card .product-buttons .buy-button {
            background-color: #fff;
        }
        .product-card .product-buttons .cart-button {
            background-color: #ff0000;
            color: #fff;
        }
  </style>
 </head>
 <body>
  <div class="header">
   <div class="logo">
   </div>
   <div class="account-name">
    Nama akun
   </div>
   <div class="search-bar">
    <input placeholder='usaha "wir"' type="text"/>
    <i class="fas fa-search search-icon">
    </i>
   </div>
  </div>
  <div class="product-grid">
   <div class="product-card">
    <img alt="Placeholder image of product" height="100" src="https://storage.googleapis.com/a1aa/image/6tZaWsMriB4kFhtKsTv6lXkmHMTnDe7neAInyO8iHUfafLmOB.jpg" width="100"/>
    <div class="product-name">
     Nama Produk
    </div>
    <div class="product-details">
     Detail penjelasan produk
    </div>
    <div class="product-price">
     Rp 5.000
    </div>
    <div class="product-buttons">
     <button class="buy-button">
      beli
     </button>
     <button class="cart-button">
      Keranjang
     </button>
    </div>
   </div>
   <div class="product-card">
    <img alt="Placeholder image of product" height="100" src="https://storage.googleapis.com/a1aa/image/6tZaWsMriB4kFhtKsTv6lXkmHMTnDe7neAInyO8iHUfafLmOB.jpg" width="100"/>
    <div class="product-name">
     Nama Produk
    </div>
    <div class="product-details">
     Detail penjelasan produk
    </div>
    <div class="product-price">
     Rp 5.000
    </div>
    <div class="product-buttons">
     <button class="buy-button">
      beli
     </button>
     <button class="cart-button">
      Keranjang
     </button>
    </div>
   </div>
   <div class="product-card">
    <img alt="Placeholder image of product" height="100" src="https://storage.googleapis.com/a1aa/image/6tZaWsMriB4kFhtKsTv6lXkmHMTnDe7neAInyO8iHUfafLmOB.jpg" width="100"/>
    <div class="product-name">
     Nama Produk
    </div>
    <div class="product-details">
     Detail penjelasan produk
    </div>
    <div class="product-price">
     Rp 5.000
    </div>
    <div class="product-buttons">
     <button class="buy-button">
      beli
     </button>
     <button class="cart-button">
      Keranjang
     </button>
    </div>
   </div>
   <div class="product-card">
    <img alt="Placeholder image of product" height="100" src="https://storage.googleapis.com/a1aa/image/6tZaWsMriB4kFhtKsTv6lXkmHMTnDe7neAInyO8iHUfafLmOB.jpg" width="100"/>
    <div class="product-name">
     Nama Produk
    </div>
    <div class="product-details">
     Detail penjelasan produk
    </div>
    <div class="product-price">
     Rp 5.000
    </div>
    <div class="product-buttons">
     <button class="buy-button">
      beli
     </button>
     <button class="cart-button">
      Keranjang
     </button>
    </div>
   </div>
   <div class="product-card">
    <img alt="Placeholder image of product" height="100" src="https://storage.googleapis.com/a1aa/image/6tZaWsMriB4kFhtKsTv6lXkmHMTnDe7neAInyO8iHUfafLmOB.jpg" width="100"/>
    <div class="product-name">
     Nama Produk
    </div>
    <div class="product-details">
     Detail penjelasan produk
    </div>
    <div class="product-price">
     Rp 5.000
    </div>
    <div class="product-buttons">
     <button class="buy-button">
      beli
     </button>
     <button class="cart-button">
      Keranjang
     </button>
    </div>
   </div>
   <div class="product-card">
    <img alt="Placeholder image of product" height="100" src="https://storage.googleapis.com/a1aa/image/6tZaWsMriB4kFhtKsTv6lXkmHMTnDe7neAInyO8iHUfafLmOB.jpg" width="100"/>
    <div class="product-name">
     Nama Produk
    </div>
    <div class="product-details">
     Detail penjelasan produk
    </div>
    <div class="product-price">
     Rp 5.000
    </div>
    <div class="product-buttons">
     <button class="buy-button">
      beli
     </button>
     <button class="cart-button">
      Keranjang
     </button>
    </div>
   </div>
   <div class="product-card">
    <img alt="Placeholder image of product" height="100" src="https://storage.googleapis.com/a1aa/image/6tZaWsMriB4kFhtKsTv6lXkmHMTnDe7neAInyO8iHUfafLmOB.jpg" width="100"/>
    <div class="product-name">
     Nama Produk
    </div>
    <div class="product-details">
     Detail penjelasan produk
    </div>
    <div class="product-price">
     Rp 5.000
    </div>
    <div class="product-buttons">
     <button class="buy-button">
      beli
     </button>
     <button class="cart-button">
      Keranjang
     </button>
    </div>
   </div>
   <div class="product-card">
    <img alt="Placeholder image of product" height="100" src="https://storage.googleapis.com/a1aa/image/6tZaWsMriB4kFhtKsTv6lXkmHMTnDe7neAInyO8iHUfafLmOB.jpg" width="100"/>
    <div class="product-name">
     Nama Produk
    </div>
    <div class="product-details">
     Detail penjelasan produk
    </div>
    <div class="product-price">
     Rp 5.000
    </div>
    <div class="product-buttons">
     <button class="buy-button">
      beli
     </button>
     <button class="cart-button">
      Keranjang
     </button>
    </div>
   </div>
   <div class="product-card">
    <img alt="Placeholder image of product" height="100" src="https://storage.googleapis.com/a1aa/image/6tZaWsMriB4kFhtKsTv6lXkmHMTnDe7neAInyO8iHUfafLmOB.jpg" width="100"/>
    <div class="product-name">
     Nama Produk
    </div>
    <div class="product-details">
     Detail penjelasan produk
    </div>
    <div class="product-price">
     Rp 5.000
    </div>
    <div class="product-buttons">
     <button class="buy-button">
      beli
     </button>
     <button class="cart-button">
      Keranjang
     </button>
    </div>
   </div>
   <div class="product-card">
    <img alt="Placeholder image of product" height="100" src="https://storage.googleapis.com/a1aa/image/6tZaWsMriB4kFhtKsTv6lXkmHMTnDe7neAInyO8iHUfafLmOB.jpg" width="100"/>
    <div class="product-name">
     Nama Produk
    </div>
    <div class="product-details">
     Detail penjelasan produk
    </div>
    <div class="product-price">
     Rp 5.000
    </div>
    <div class="product-buttons">
     <button class="buy-button">
      beli
     </button>
     <button class="cart-button">
      Keranjang
     </button>
    </div>
   </div>
   <div class="product-card">
    <img alt="Placeholder image of product" height="100" src="https://storage.googleapis.com/a1aa/image/6tZaWsMriB4kFhtKsTv6lXkmHMTnDe7neAInyO8iHUfafLmOB.jpg" width="100"/>
    <div class="product-name">
     Nama Produk
    </div>
    <div class="product-details">
     Detail penjelasan produk
    </div>
    <div class="product-price">
     Rp 5.000
    </div>
    <div class="product-buttons">
     <button class="buy-button">
      beli
     </button>
     <button class="cart-button">
      Keranjang
     </button>
    </div>
   </div>
   <div class="product-card">
    <img alt="Placeholder image of product"