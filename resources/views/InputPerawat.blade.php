<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/InputPerawatStyle.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">
        <title> SiPERI - Tambah Data Perawat </title>
        <a onclick="history.back()"> <-Kembali </a><br>
        
    </head>
    <body class="background">
        <div class="box">
            <p class="judul">Masukkan Data Perawat<br><br>
                <form action="/inputperawat/store" method="post" role="form">
                     {{csrf_field()}}

                     <button class="button1"><img src="img/back.png" width="40" height="40"></button>

                        <label>Nomor Pegawai</label><br>
                            <input type="text" require="required" name="noPegawai"><br><br>

                        <label>Nama Lengkap</label><br>
                            <input type="text" require="required" name="namaPerawat"><br><br>
            
                        <label>Password Akun</label><br>
                            <input type="password" require="required" name="passwordPerawat"><br><br>

                        <label>Konfirmasi Password</label><br>
                            <input type="password" require="required" name="konfirpasswordPerawat"><br><br>
            
                        <button type=submit class="button2">Simpan Data </button><br>
                </form> 
        </div>
    </body>
</html>