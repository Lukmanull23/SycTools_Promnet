<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SycTools | Register</title>
    <link rel="stylesheet" href="assets/css/styleRegister.css">
</head>
<body>
    <header>
            <img id="logo" src="/assets/img/logo.png">
    </header>
    <div id="register-form">
        <h1>Register</h1>
        <form id="form-kiri" action="/register" method="post">
            <p>Nama Lengkap</p> 
            <input type="text" name="nl" placeholder="Masukkan Nama" id="nama">
            <p>Nomor Telepon/WA</p>
            <input type="number" name="telepon" placeholder="Masukkan Nomor" id="wa">
            <p>Email</p>
            <input type="email" name="email" placeholder="Masukkan Email" id="email">
        </form>
        <div id="punyaAkun">
            <p id="login">Sudah punya akun? <a href="login">Log In</a></p>
            <a href="/login"><button type=submit id="btnSignUp">Sign Up</button></a>
        </div>
        <form action="/register" method="post">
        <div id="form-kanan">
                <p >Password</p>
                <input type="password" name="password" placeholder="Masukkan Password">
                <p >Re-type Password</p>
                <input type="Password" name="retype" placeholder="Masukkan Password">
            </div>
        </form id="form-kanan">    
    </div>
    <script type="text/javascript">
        function validasi() {
            var nama = document.getElementById("nama").value;
            var email = document.getElementById("email").value;
            var wa = document.getElementById("wa").value;
            if (nama != "" && email!="" && wa !="") {
                return true;
            }else{
                alert('Anda harus mengisi data dengan lengkap !');
            }
        }
    </script>

</body>
</html>