<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/InputDataPribadiStyle.css">
        <link rel="stylesheet" href="./assets/css/bootstrap.css">
        <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">

        <title> SiPERI - Edit Data Pasien </title>
    </head>
    
    <body class="background">
        <nav class="navbar">
            <img src="/img/logo.png" alt="logo">
        </nav>
        <div class="box">
            @foreach($pribadipasien as $pp)
        
        <form action="/pribadipasien/updatedata" method="post" role="form">
            {{csrf_field()}}
            <a onclick="history.back()"><img img class="text-center pt-4 pb-3 button1" src="/img/back.png" alt="arrowBack"></a>
            <p class="judul">Masukkan Data Pasien {{$pp->no_pasien}} - {{$pp->nama_pasien}}</p>
            
            <label>Nomor Pasien</label><br>
            <input type="text" value="{{$pp->no_pasien}}" required="required" name="noPasien"></br>

            <label>Nama Lengkap</label><br>
            <input type="text" value="{{$pp->nama_pasien}}" required="required" name="namaPasien"></br>

            <label>Tanggal Lahir</label><br>
            <input type="date"  required="required" name="tgl_lhrPasien" value="{{$pp->tgl_lhr_pasien}}"></br>
            
            <label>Alamat Pasien</label><br>
            <input type="text" value="{{$pp->almt_pasien}}" required="required" name="alamatPasien"></br>

            <label>No Telepon Pasien</label><br>
            <input type="text" value="{{$pp->nohp_pasien}}" required="required" name="nohpPasien"></br>

            <label>Jenis Kelamin</label><br>
            <select type="text" required="required" name="jkPasien"></br>
                <!--<option selected disabled>Pilih</option><br>-->
                <option>{{$pp->jk_pasien}}</option>
                <option>Perempuan</option>
                <option>Laki-laki</optio></select></br><br>
            @endforeach()
            <button type="submit" name="login" class="button2">Lanjut</button>
        </form>
        </div>
</body>
</html>
