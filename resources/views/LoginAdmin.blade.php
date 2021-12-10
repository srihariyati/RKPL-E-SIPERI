<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siPeri | Login Admin</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style-admin-login.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">
</head>
<body class="background">
<nav class="navbar">
        <a href="/MenuPerawat"><img src="/img/logo.png" alt="logo"></a>
    </nav>
    <div class="box" style = "padding-left:calc(100vw - 100%);">
        <h1 >SIPERI</h1>
        <h2 >Sistem Pencatatan Riwayat Pasien</h2>

        <form action ="/admin/login" method="GET">
        {{csrf_field()}}
        <div>
            <input type="text" required="required"  name="username" class="form_login" id="exampleInputEmail1" placeholder="Username..." ><br>
            <input type="password" required="required"  name="password" class="form_login" id="exampleInputPassword1" placeholder="Password..." require="required">
        </div>
        <div class="mb-3 form-check rm">
            <input type="checkbox" value="" id="flexCheckDefault">
            <label class=" rm-label" for="flexCheckDefault"> Remember Me</label>
        </div>
        <button type="submit" name="login"  class="btn btn-primary tombol_login">Login</button>
        </form>
        <p class="beranda"><br><a href="/">Beranda</a></p>
    </div>
    <p class="versioncontrol">Made by Kelompok E RKPL</p>
</body>
</html>