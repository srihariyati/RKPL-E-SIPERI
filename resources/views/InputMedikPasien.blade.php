<!DOCTYPE html>

<html>
    <head>
        <title> SiPERI - Tambah Data Medik </title>
        <a onclick="history.back()"> <-Kembali </a><br>
        <p1>Masukkan Data Medik Pasien<br><br>
    </head>

    <body>
        <form action="/medikpasien/store" method="post" role="form">
        {{csrf_field()}} 
            <label>Nomor Pasien</label><br>
            <input type="text" required="required" name="noPasien" value={{$nomorPasien}} readonly></br>
        

            <label>Golongan Darah</label><br>
            <select type="text" required="required" name="goldarPasien"></br>
                <option selected disabled>Pilih</option><br>
                <option>A</option>
                <option>B</option>
                <option>AB</option>
                <option>O</option></select></br>

            <label>Tekanan Darah</label><br>
            <input type="text" required="required" name="tekPasien"></br>
            
            <label>Penyakit Jantung</label><br>
            <select type="text" required="required" name="jantungPasien"></br>
                <option selected disabled>Pilih</option><br>
                <option>Ya</option>
                <option>Tidak</option></select></br>

            <label>Diabetes</label><br>
            <select type="text" required="required" name="diabetesPasien"></br>
                <option selected disabled>Pilih</option><br>
                <option>Ya</option>
                <option>Tidak</option></select></br>

            <label>Hepatitis</label><br>
            <select type="text" required="required" name="hepatitisPasien"></br>
                <option selected disabled>Pilih</option><br>
                <option>Ya</option>
                <option>Tidak</option></select></br>

            <label>Alergi Obat</label><br>
            <select type="text" required="required" name="alerobatPasien"></br>
                <option selected disabled>Pilih</option><br>
                <option>Ya</option>
                <option>Tidak</option></select></br>

            <label>Alergi Makanan</label><br>
            <select type="text" required="required" name="alermakanPasien"></br>
                <option selected disabled>Pilih</option><br>
                <option>Ya</option>
                <option>Tidak</option></select></br><br>
                
            <button type="submit">Lanjut</button><br>
        </form>
    </body>
</html>
