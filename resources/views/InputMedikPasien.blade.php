<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/InputMedikPasienStyle.css">
        <link rel="stylesheet" href="./assets/css/bootstrap.css">
        <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">
        <title> SiPERI - Tambah Data Medik </title>
    </head>

    <body class="background">
        <nav class="navbar">
        <a href="/MenuPerawat"><img src="/img/logo.png" alt="logo"></a>
        </nav>
        <div class="box">
        <p class="judul">Masukkan Data Medik Pasien</p>

        <form action="/medikpasien/store" method="post" role="form">
        {{csrf_field()}} 
            <a onclick="history.back()"><img img class="text-center pt-4 pb-3 button1" src="/img/back.png" alt="arrowBack"></a>
            
            <label>Nomor Pasien</label><br>
            <input type="text" required="required" name="noPasien" value={{$nomorPasien}} readonly ></br>

            <label>Golongan Darah</label><br>
            <select type="text" required="required" name="goldarPasien"></br>
                <option selected disabled>Pilih...</option><br>
                <option>A</option>
                <option>B</option>
                <option>AB</option>
                <option>O</option></select></br>

            <label>Tekanan Darah</label><br>
            <input type="text" required="required" name="tekPasien"></br>
            
            <label>Penyakit Jantung</label><br>
            <select type="text" required="required" name="jantungPasien"></br>
                <option selected disabled>Pilih...</option><br>
                <option>Ya</option>
                <option>Tidak</option></select></br>

            <label>Diabetes</label><br>
            <select type="text" required="required" name="diabetesPasien"></br>
                <option selected disabled>Pilih...</option><br>
                <option>Ya</option>
                <option>Tidak</option></select></br>

            <label>Hepatitis</label><br>
            <select type="text" required="required" name="hepatitisPasien"></br>
                <option selected disabled>Pilih...</option><br>
                <option>Ya</option>
                <option>Tidak</option></select></br>

            <label>Alergi Obat</label><br>
            <select type="text" required="required" name="alerobatPasien"></br>
                <option selected disabled>Pilih...</option><br>
                <option>Ya</option>
                <option>Tidak</option></select></br>

            <label>Alergi Makanan</label><br>
            <select type="text" required="required" name="alermakanPasien"></br>
                <option selected disabled>Pilih...</option><br>
                <option>Ya</option>
                <option>Tidak</option></select></br><br>
                   
            <button type="submit" name="login"  class="button2">Lanjut</button>
        </form>
        </div>
</body>
</html>
