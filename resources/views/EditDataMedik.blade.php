<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/InputMedikPasienStyle.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">
    <title> SiPERI - Edit Data Medik</title>
</head>

<body class="background">
        <nav class="navbar">
            <img src="/img/logo.png" alt="logo">
        </nav>
        <div class="box">
        <p class="judul">Masukkan Data Medik Pasien</p>
<form action="/medikpasien/update" method="post" role="form">
        {{csrf_field()}}
        <a onclick="history.back()"><img img class="text-center pt-4 pb-3 button1" src="/img/back.png" alt="arrowBack"></a>
        @foreach($medikPasien as $mp)
            <label>Nomor Pasien</label><br>
            <input type="text"  required="required" name="noPasien" value="{{$mp -> no_pasien}}" readonly></br>
        
            <label>Golongan Darah</label><br>
            <select type="text" required="required" name="goldarPasien"></br>
                <!--<option selected disabled>Pilih</option><br>-->
                <option>{{$mp->gol_darah}}</option>
                <option>A</option>
                <option>B</option>
                <option>AB</option>
                <option>O</option></select></br>

            <label>Tekanan Darah</label><br>
            <input type="text" value ="{{$mp->tek_darah}}" required="required" name="tekPasien"></br>
            
            <label>Penyakit Jantung</label><br>
            <select type="text" required="required" name="jantungPasien"></br>
                <!--<option selected disabled>Pilih</option><br>-->
                <option>{{$mp->jantung}}</option>
                <option>Ya</option>
                <option>Tidak</option></select></br>

            <label>Diabetes</label><br>
            <select type="text" required="required" name="diabetesPasien"></br>
                <!--<option selected disabled>Pilih</option><br>-->
                <option>{{$mp->diabetes}}</option>
                <option>Ya</option>
                <option>Tidak</option></select></br>

            <label>Hepatitis</label><br>
            <select type="text" required="required" name="hepatitisPasien"></br>
                <!--<option selected disabled>Pilih</option><br>-->
                <option>{{$mp->hepatitis}}</option>
                <option>Ya</option>
                <option>Tidak</option></select></br>

            <label>Alergi Obat</label><br>
            <select type="text" required="required" name="alerobatPasien"></br>
                <!--<option selected disabled>Pilih</option><br>-->
                <option>{{$mp->alergi_obat}}</option>
                <option>Ya</option>
                <option>Tidak</option></select></br>

            <label>Alergi Makanan</label><br>
            <select type="text" required="required" name="alermakanPasien"></br>
                <!--<option selected disabled>Pilih</option><br>-->
                <option>{{$mp->alergi_mkn}}</option>
                <option>Ya</option>
                <option>Tidak</option></select></br><br>
            @endforeach
            <button type="submit" name="login" class="button2">Lanjut </button>
        </form>
        </div>
</body>
</html>