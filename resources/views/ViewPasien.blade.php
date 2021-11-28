<!DOCTYPE html>
<html>
    <head>
        <title> SiPERI - Data Pasien  </title>
        <a onclick="history.back()"> <-Kembali </a><br>
        <p1>Data dan Riwayat Pasien<br>
    </head>
    
    <body>
    <a href=""> Unduh </a><br>
        <table>
        <tbody>
            <th>Data Pasien</th>
            <th> </th>
            @foreach($dataPasien as $dP)
            <tr><td>ID</td><td>: {{$dP->no_pasien}}</td></tr><br>
            <tr><td>Nama</td><td>: {{$dP->nama_pasien}}</td></tr><br>
            <tr><td>Tanggal Lahir</td><td>: {{$dP->tgl_lhr_pasien}}</td></tr><br>
            <tr><td>Alamat</td><td>: {{$dP->almt_pasien}}</td></tr><br>
            <tr><td>No HP</td><td>: {{$dP->nohp_pasien}}</td></tr><br>
            <tr><td>Jenis Kelamin</td><td>: {{$dP->jk_pasien}}</td></tr>
            @endforeach($dataPasien as $dP)
         <tbody>
         </table>
             
        

        <table>  
        <tbody>
            <th>Data Medik</th>
            <th> </th>
            @foreach($dataPasien as $dPs)
            <tr><td>Golongan Darah</td><td>: {{$dPs->gol_darah}}</td></tr><br>
            <tr><td>Tekanan Darah</td><td>: {{$dPs->tek_darah}}</td></tr><br>
            <tr><td>Penyakit Jantung</td><td>: {{$dPs->jantung}}</td></tr><br>
            <tr><td>Diabetes</td><td>: {{$dPs->diabetes}}</td></tr><br>
            <tr><td>Hepatitis</td><td>: {{$dPs->hepatitis}}</td></tr><br>
            <tr><td>Alergi Obat</td><td>: {{$dPs->alergi_obat}}</td></tr><br>
            <tr><td>Alergi Makanan</td><td>: {{$dPs->alergi_mkn}}</td></tr>
            @endforeach($dataPasien as $dPs)
         <tbody>
         </table>
    
        
        <table>
        <p> Riwayat Tindakan
        <thead>
            <tr>
               <th>Tanggal</th>
               <th>Tindakan</th>
            </tr>
         </thead>

         <tbody>
            <tr>
                @foreach($dataTindakan as $dT)
               <td>{{$dT->tgl_tindakan}}</td>
               <td>{{$dT->tindakan}}</td>
            </tr>
            @endforeach($dataTindakan as $dT)
         <tbody>
      </table>


    </body>
</html>
