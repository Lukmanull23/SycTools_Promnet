<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SycTools | Sell</title>
    <link rel="stylesheet" href="/assets/css/jualBarangStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav>
            <img src="/assets/img/logo.png" alt="" >
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="lihatBarang">Product</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="account">Account</a></li>
            </ul>
        </nav>
    </header>

    <div id="container">
        <div id="boxLeft">
            <p>
                <label>Nama Barang:</label><br>
                <input type="text" name="username" placeholder="Nama" />
            </p>
            <div id="upload">
                <label>Masukkan Gambar Barang:</label><br>
                <button type="button" class="btnWarning">
                    <i class="fa fa-upload"></i> Upload File
                    <input type="file">
                </button>
            </div>
            <p id="hrgBarang">
                <label>Harga Barang:</label><br>
                <input type="text" name="username" placeholder="Harga" />
            </p>
            <div id="kategori">
                <label>Pilih Kategori Barang:</label><br>
                <div id="pilihKategori">
                    <button class="btnKT" id="btnKK">
                        Kreasi Kayu
                    </button>
                    <button class="btnKT">
                        Elektronika
                    </button>
                    <button class="btnKT" id="btnPkb">
                        Perkebunan
                    </button>
                </div>
            </div>
            <div id="deskBarang">
                <label>Masukkan Deskripsi Barang:</label><br>
                <input type="text" name="deskBarang" placeholder="Deskripsi Barang" />
            </div>
        </div>

        <div id="boxRight">
            <img src="assets/img/sell.png" alt=""><br>
            <a href="barangKu"> <button id="btnJual" type="button">Jual Sekarang</button></a>
        </div>
    </div>

    <div id="cart">
        <a href="#"><img src="assets/img/cart.png" alt=""></a>
    </div>

</body>
</html>