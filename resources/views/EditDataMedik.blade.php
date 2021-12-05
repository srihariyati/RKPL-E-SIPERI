<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SiPERI - Edit Data Medik</title>
    <a onclick="history.back()"> <-Kembali </a><br>
</head>
<body>
<form action="/medikpasien/update" method="post" role="form">
        {{csrf_field()}}
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
            <button type="submit">Lanjut </button>
        </form>
</body>
</html>