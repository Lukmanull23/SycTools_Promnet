<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SycTools | Payment</title>
    <link rel="stylesheet" href="assets/css/stylePayment.css">
</head>
<body><!-- Navbar -->
    <header>
        <nav>
            <img src="/assets/img/logo.png" alt="">
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/produk">Product</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/account">Account</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="produk">
            <div class="judul">
                <h1>Product</h1>
            </div>
            <article>
                <div class="gambar">
                    <img src="assets/img/kmptr2.png" alt="">
                </div>
                <div class="ket">
                    <h3>
                        Random Stuff
                    </h3>
                    <p>
                        Nama Akun penjual
                    </p>
                    <p id="harga">
                        Rp.400.000,-
                    </p>   
                </div> 
            </article>

            <div class="metode-pembayaran">
                <div class="judul">
                    <h1>Metode Pembayaran</h1>
                </div>
                <div>
                    <img src="assets/img/dana.png" alt="">
                    <input type="checkbox" class="pilihan">
                    <input type="number" class="pilihan">
                </div>
                <div>
                    <img src="assets/img/indomarit.png" alt="">
                    <input type="checkbox" class="pilihan">
                </div>
                <div>
                    <img src="assets/img/alfa.png" alt="">
                    <input type="checkbox" class="pilihan">
                </div>
                <div>
                    <img src="assets/img/BNI.png" alt="">
                    <input type="checkbox" class="pilihan">
                    <input type="number" class="pilihan">
                </div>
            </div>
        </div>
        <div class="alamat">
            <div class="judul">
                <h1>Alamat</h1>
            </div>
            <form action="#" method="post">
                <table>
                    <tr>
                        <td>Provinsi</td>
                        <td><input type="text" class="almt"></td>
                    </tr>
                    <tr>
                        <td>Kabupaten</td>
                        <td><input type="text" class="almt"></td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td><input type="text" class="almt"></td>
                    </tr>

                    <tr>
                        <td>Kelurahan</td>
                        <td><input type="text" class="almt"></td>
                    </tr>

                    <tr>
                        <td>Deskripsi Alamat</td>
                        <td><input type="text" class="almt"></td>
                    </tr>
                </table>
            </form>
            <button type="submit" id="btnBayar">Bayar Sekarang</button>
        </form>
        </div>
    </section>


</body>
</html>