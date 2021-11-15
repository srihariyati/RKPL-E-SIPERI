<!DOCTYPE html>

<html>
    <head>
        <title> SiPERI - Tambah Data Perawat </title>
        <a onclick="history.back()"> <-Kembali </a><br>
        <p1>Masukkan Data Perawat<br><br>
    </head>
    <body>
        <form action="/inputperawat/store" method="post" role="form">
        {{csrf_field()}}
            <kabel>Nomor Pegawai</label><br>
            <input type="text" require="required" name="noPegawai"><br>

            <kabel>Nama Lengkap</label><br>
            <input type="text" require="required" name="namaPerawat"><br>
            
            <kabel>Password Akun</label><br>
            <input type="password" require="required" name="passwordPerawat"><br>

            <kabel>Konfirmasi Password</label><br>
            <input type="password" require="required" name="konfirpasswordPerawat"><br>
            <button type=submit>Simpan Data </button><br>
        </form> 
    </body>
</html>
