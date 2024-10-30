<html>
<head>
    <title>Isi Alamat Lengkap Anda</title>
    <style>
        body {
            font-family: 'Comic Sans MS', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            border: 1px solid black;
            padding: 20px;
            width: 300px;
        }
        .container h1 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
        }
        .container label {
            display: block;
            margin-bottom: 10px;
        }
        .container input[type="text"],
        .container textarea,
        .container select {
            width: calc(100% - 20px);
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid black;
            border-radius: 5px;
        }
        .container textarea {
            height: 60px;
        }
        .container .payment-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .container .payment-section select {
            width: 60%;
        }
        .container .payment-section .total-container {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            width: 35%;
            padding-left: 10px;
        }
        .container .payment-section .total-container span {
            white-space: nowrap;
            margin-bottom: 5px;
            font-size: 12px;
            text-align: right;
        }
        .container .payment-section .total-container .total-line {
            width: 100%;
            border-top: 1px solid black;
            margin-top: 10px;
        }
        .container .buttons {
            display: flex;
            justify-content: space-between;
        }
        .container .buttons button {
            width: 45%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
        }
        .container .buttons .cancel {
            background-color: red;
        }
        .container .buttons .confirm {
            background-color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Isi Alamat Lengkap Anda</h1>
        <label>Nama Lengkap : <input type="text"></label>
        <label>provinsi : <input type="text"></label>
        <label>kabupaten : <input type="text"></label>
        <label>kecamatan : <input type="text"></label>
        <label>Catatan : <textarea></textarea></label>
        <div class="payment-section">
            <select>
                <option>Pilih Metode Pembayaran</option>
                <option>Kartu Kredit</option>
                <option>Transfer Bank</option>
                <option>PayPal</option>
                <option>Gopay</option>
                <option>OVO</option>
            </select>
            <div class="total-container">
                <span>Total pembayaran :</span>
                <div class="total-line"></div>
            </div>
        </div>
        <div class="buttons">
            <button class="cancel">Batal</button>
            <button class="confirm">Konfirmasi</button>
        </div>
    </div>
</body>
</html>