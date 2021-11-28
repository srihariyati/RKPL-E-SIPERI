<!DOCTYPE html>
<html>
    <head>
        <title> SiPERI - Tambah Tindakan </title>
        <a onclick="history.back()"> <-Kembali </a><br>
        <p1>Masukkan Data Tindakan Pasien<br><br>
    </head>
    
    <body>
        <form action="/tindakanpasien/store" method="post" role="form">
        {{csrf_field()}} 
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
            <textarea required="required" name="jenisTindakan"></textarea><br><br>
        
            <button type="submit"> Simpan </button><br>
        </form>   
    </body>
</html>
