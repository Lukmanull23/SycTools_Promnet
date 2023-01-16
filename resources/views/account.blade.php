<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SycTools | Account</title>
    <link rel="stylesheet" href="/assets/css/accountStyle.css">
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
        <h1>Profile Account</h1>
        <div class="content">
            <div class="form">
                <p>
                    <label>Nama:</label><br>
                    <input type="text" name="username" placeholder="Nama" />
                </p>
                <p>
                    <label>Nomor Telepon/WA:</label><br>
                    <input type="text" name="username" placeholder="Nomor Telepon/WA" />
                </p>
                <p>
                    <label>Email:</label><br>
                    <input type="text" name="username" placeholder="Email" />
                </p>
                <p>
                    <label>Alamat:</label><br>
                    <input id="alamat" type="text" name="username" placeholder="Alamat" />
                </p>
            </div>
            <div id="button">
                <button id="btnBarang">
                    BarangKu
                </button>
                <button id="btnEdit">
                    Edit
                </button>
                <button id="btnConfirm">
                    Confirm
                </button>
            </div>
        </div>
    </div>
    <div id="cart">
        <a href="#"><img src="assets/img/cart.png" alt=""></a>
    </div>

</body>
</html>