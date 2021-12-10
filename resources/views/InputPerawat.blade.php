<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/InputPerawatStyle.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">
        <title> SiPERI - Tambah Data Perawat </title>
    </head>
    <body class="background">
    <nav class="navbar">
        <a href="/MenuAdmin"><img src="/img/logo.png" alt="logo"></a>
    </nav>
        <div class="box">
                <form action="/inputperawat/store" method="post" role="form">

                     {{csrf_field()}}
                     <div class="col-sm">
                        <a onclick="history.back()"><img img class="text-center pt-4 pb-3 button1" src="/img/back.png" alt="arrowBack"></a>
                     </div>
                     <div class="col-sm">
                        <h3 class="text-center pt-5 pb-3">Masukkan Data Perawat</h3>
                    </div>

                        <label>Nomor Pegawai</label><br>
                            <input type="text" required="required" name="noPegawai"><br><br>

                        <label>Nama Lengkap</label><br>
                            <input type="text" required="required" name="namaPerawat"><br><br>
            
                        <label>Password Akun</label><br>
                            <input type="password" required="required" name="passwordPerawat"><br><br>

                        <label>Konfirmasi Password</label><br>
                            <input type="password" required="required" name="konfirpasswordPerawat"><br><br>
            
                        <button type=submit class="button2">Simpan Data </button><br>
                </form> 
        </div>
    </body>
</html>