<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href=".\css\style-admin-login.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">
    <title>SiPERI | Login Perawat</title>
</head>

<body class="background">
    <div class="box">
        <h1 >SIPERI</h1>
        <h2 >Sistem Pencatatan Riwayat Pasien</h2>
        <form action="/perawat/login" method="GET">
        {{csrf_field()}}
            <div>
                <input type="text" name="nomorpegawai" class="form_login" id="exampleInputEmail1" placeholder="Nomor Pegawai..." require="required">

                <input type="password" name="password" class="form_login" id="exampleInputPassword1" placeholder="Password..." require="required">

                <div class="mb-3 form-check rm">
                <input type="checkbox" value="" id="flexCheckDefault">
                <label class=" rm-label" for="flexCheckDefault"> Remember Me</label>
                </div>
            </div>
            <button type="submit" name="login"  class="btn btn-primary tombol_login">Login</button>
        </form>
        <p class="beranda"><br><a href="/">Beranda</a></p>
    </div>

    <p class="versioncontrol">Made by Kelompok E RKPL</p>
</body>

</html>