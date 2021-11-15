<!DOCTYPE html>

<html>
    <head>
        <title> SiPERI - Tambah Data Dokter </title>
        <a onclick="history.back()"> <-Kembali </a><br>
        <p1>Masukkan Data Perawat<br><br>
    </head>
    <body>
        <form action="/inputdokter/store" method="post" role="form">
        {{csrf_field()}}
            <kabel>Nomor Pegawai Dokter</label><br>
            <input type="text" require="required" name="noPegawaiDok"><br>

            <kabel>Nama Lengkap</label><br>
            <input type="text" require="required" name="namaDokter"><br>
            
            <kabel>Bidang Spesialis</label><br>
            <select type="text" required="required" name="bidSpesialis"></br>
                <option selected disabled>Pilih</option><br>
                <option>Dokter Gigi Umum</option>
                <option>Spesialis Bedah Mulut</option>
                <option>Spesialis Konservasi Mulut</option>
                <option>Spesialis Penyakit Mulut</option>
                <option>Spesialis Radiologi Kedokteran Gigi</option></select></br><br>

            <button type=submit>Simpan Data </button><br>
        </form> 
    </body>
</html>
