<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/InputTindakanStyle.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">
    <title> SiPERI - Tambah Tindakan </title>       
    </head>
    <body class="background">
    <nav class="navbar">
    <a href="/MenuPerawat"><img src="/img/logo.png" alt="logo"></a>
    </nav>
        <div class="box">
          
            <p class="judul">Masukkan Data Tindakan Pasien</p>

            <form action="/tindakanpasien/store" method="post" role="form">
                {{csrf_field()}} 
                <a onclick="history.back()"><img img class="text-center pt-4 pb-3 button1" src="/img/back.png" alt="arrowBack"></a>
                    <label>Nomor Pasien</label><br>
                    <input type="text" required="required" name="noPasien" value={{$nomorPasien}} readonly></br>
        
                    <label>Tanggal Tindakan</label><br>
                    <input type="date" required="required" name="tglTindakan"></br>
        
                    <label>Spesialis</label><br>
                    <select type="text" required="required" name="spesialisTindakan"></br>
                        <option selected disabled>Pilih</option><br>
                        <option>Dokter Gigi Umum</option>
                        <option>Spesialis Bedah Mulut</option>
                        <option>Spesialis Konservasi Mulut</option>
                        <option>Spesialis Penyakit Mulut</option>
                        <option>Spesialis Radiologi Kedokteran Gigi</option></select></br>
                               
                    <label>Nama Dokter</label><br>
                    <select  type="text" required="required" name="dokterTindakan"></br>
                        <option selected disabled>Pilih</option><br>
                        @foreach($namaDokter as $nD)
                        <option >{{$nD -> nama_dokter}}</option>
                        @endforeach
                    </select></br>
        
                    <label>Jenis Tindakan</label><br>
                    <input type="textarea" required="required" name="jenisTindakan"></br>
                    </input></br>
                    
                    <button type="submit" name="login"  class="button2">Simpan</button>           
        </form>
    </div>
    </body>
</html>
