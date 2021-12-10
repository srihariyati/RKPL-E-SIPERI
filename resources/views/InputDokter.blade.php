<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/InputDokterStyle.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">
        <title> SiPERI - Tambah Data Dokter </title>
        <a onclick="history.back()"> <-Kembali </a><br>
            <link rel="icon" href="/img/logo.png">

    </head>
    <body class="background">
    <nav class="navbar">
        <a href="/MenuAdmin"><img src="/img/logo.png" alt="logo"></a>
    </nav>
        <div class="box">
        <form action="/inputdokter/store" method="post" role="form">
        {{csrf_field()}}
            <div class="col-sm">
               <a onclick="history.back()"><img img class="text-center pt-4 pb-3 button1" src="/img/back.png" alt="arrowBack"></a>
            </div>
            <div class="col-sm">
                <h3 class="text-center pt-5 pb-3">Masukkan Data Dokter</h3>
            </div>

            <label>Nomor Pegawai Dokter</label><br>
            <input type="text" required="required" name="noPegawaiDok"><br>

            <label>Nama Lengkap</label><br>
            <input type="text" required="required" name="namaDokter"><br>
            
            <label>Bidang Spesialis</label><br>
            <select type="text" required="required" name="bidSpesialis"></br>
                <option selected disabled>Pilih</option><br>
                <option>Dokter Gigi Umum</option>
                <option>Spesialis Bedah Mulut</option>
                <option>Spesialis Konservasi Mulut</option>
                <option>Spesialis Penyakit Mulut</option>
                <option>Spesialis Radiologi Kedokteran Gigi</option></select></br><br>

              <button type=submit name="login" class="button2">Simpan Data </button><br>   

        </form> 
    </body>
</html>