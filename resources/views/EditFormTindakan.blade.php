<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS External -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/InputTindakanStyle.css">
        <link rel="stylesheet" href="./assets/css/bootstrap.css">
        <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">
        <title> SiPERI - Ubah Tindakan </title>
    </head>
    
    <body  class="background">
    <nav class="navbar">
    <a href="/MenuPerawat"><img src="/img/logo.png" alt="logo"></a>
    </nav>
        <div class="box">
        <p class="judul">Masukkan Data Tindakan Pasien</p>
        <form action="/tindakanpasien/update" method="post" role="form"> 
        {{csrf_field()}} 
        @foreach($tindakanPasien as $tp)
            <label>ID Tindakan</label><br>
            <input type="text" required="required" name="ID" value="{{$tp->id_tindakan}}" readonly></br>


            <label>Nomor Pasien</label><br>
            <input type="text" required="required" name="noPasien" value="{{$tp->no_pasien}}" readonly></br>

            <label>Tanggal Tindakan</label><br>
            <input type="date" required="required" name="tglTindakan" value="{{$tp->tgl_tindakan}}"></br>

            <label>Spesialis</label><br>
            <select type="text" required="required" name="spesialisTindakan"></br>
                <!--<option selected disabled>Pilih</option><br>-->
                <option>{{$tp -> nama_spesialis}}</option>
                <option>Dokter Gigi Umum</option>
                <option>Spesialis Bedah Mulut</option>
                <option>Spesialis Konservasi Mulut</option>
                <option>Spesialis Penyakit Mulut</option>
                <option>Spesialis Radiologi Kedokteran Gigi</option></select></br>
                       
            <label>Nama Dokter</label><br>
            <select  type="text" required="required" name="dokterTindakan"></br>
            <!--<option selected disabled>Pilih</option><br>    -->
            <option>{{$tp->nama_dokter}}</option><br> 
                @foreach($namaDokter as $nD)
                <option >{{$nD -> nama_dokter}}</option>
                @endforeach({$namaDoker as $nD})
            </select></br>

            <label>Jenis Tindakan</label><br>
            <textarea required="required" name="jenisTindakan">{{$tp->tindakan}}</textarea><br><br>
            @endforeach($tindakanPasien as $tP)
            <button type="submit" name="login" class="button2"> Simpan Perubahan </button><br>
        </form>   
    </div>
    </body>
</html>
