<!DOCTYPE html>
<html>
    <head>
        <title> SiPERI - Ubah Tindakan </title>
        <a onclick="history.back()"> <-Kembali </a><br>
        <p1>Masukkan Data Tindakan Pasien<br><br>
    </head>
    
    <body>
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
            <button type="submit"> Simpan Perubahan </button><br>
        </form>   
    </body>
</html>
