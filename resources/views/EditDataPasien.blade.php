<!DOCTYPE html>
<html>
    <head>
        @foreach($pribadipasien as $pp)
        <title> SiPERI - Edit Data Pasien </title>
        <p1>Masukkan Data Pasien {{$pp->no_pasien}} - {{$pp->nama_pasien}}<br><br>
        <a onclick="history.back()"> <-Kembali </a>
    </head>
    
    <body>
        
        <form action="/pribadipasien/updatedata" method="post" role="form">
            {{csrf_field()}}
            <label>Nomor Pasien</label><br>
            <input type="text" value="{{$pp->no_pasien}}" required="required" name="noPasien"></br>

            <label>Nama Lengkap</label><br>
            <input type="text" value="{{$pp->nama_pasien}}" required="required" name="namaPasien"></br>

            <label>Tanggal Lahir</label><br>
            <input type="date"  required="required" name="tgl_lhrPasien"></br>
            
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
            <button type="submit">Lanjut</button>
        </form>

        
</body>
        

</html>
