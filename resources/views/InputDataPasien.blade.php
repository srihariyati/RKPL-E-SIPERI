<!DOCTYPE html>
<html>
    <head>
        <title> SiPERI - Tambah Data Pasien </title>
        <p1>Masukkan Data Pasien<br><br>
    </head>
    
    <body>
        <form action="/pribadipasien/store" method="post" role="form">
            {{csrf_field()}}
            <label>Nomor Pasien</label><br>
            <input type="text" required="required" name="noPasien"></br>

            <label>Nama Lengkap</label><br>
            <input type="text" required="required" name="namaPasien"></br>

            <label>Tanggal Lahir</label><br>
            <input type="date" required="required" name="tgl_lhrPasien"></br>
            
            <label>Alamat Pasien</label><br>
            <input type="text" required="required" name="alamatPasien"></br>

            <label>No Telepon Pasien</label><br>
            <input type="text" required="required" name="nohpPasien"></br>

            <label>Jenis Kelamin</label><br>
            <select type="text" required="required" name="jkPasien"></br>
                <option selected disabled>Pilih</option><br>
                <option>Perempuan</option>
                <option>Laki-laki</optio></select></br><br>

            <button type="submit"> Lanjut</button>
        </form>

        <a onclick="history.back()"> <-Kembali </a>
</body>
        

</html>
